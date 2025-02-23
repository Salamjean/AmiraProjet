<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Validation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
        public function dashboard(){
            $validations = Validation::count();
            $nonPris = Validation::where('etat', 'Non Pris')->count();
            $pris = Validation::where('etat', 'Pris')->count();
    
            // Récupérer les données pour le graphique évolutif
            $dailyValidations = Validation::select(DB::raw('DATE(created_at) as date'), 'etat', DB::raw('count(*) as count'))
                ->groupBy('date', 'etat')
                ->orderBy('date')
                ->get();
    
            // Organiser les données pour le graphique Chart.js
            $dates = [];
            $prisCounts = [];
            $nonPrisCounts = [];
    
            foreach ($dailyValidations as $dayValidation) {
                // Convert the string date to a Carbon object and then format
                $dateString = $dayValidation->date; // Get the date as string from DB
                $date = Carbon::parse($dateString)->format('Y-m-d'); // Parse string to Carbon, then format
    
                if (!in_array($date, $dates)) {
                    $dates[] = $date;
                }
                if ($dayValidation->etat == 'Pris') {
                    $prisCounts[$date] = $dayValidation->count;
                } elseif ($dayValidation->etat == 'Non Pris') {
                    $nonPrisCounts[$date] = $dayValidation->count;
                }
            }
    
            // Remplir les jours manquants avec 0 pour assurer une courbe continue
            foreach ($dates as $date) {
                if (!isset($prisCounts[$date])) {
                    $prisCounts[$date] = 0;
                }
                if (!isset($nonPrisCounts[$date])) {
                    $nonPrisCounts[$date] = 0;
                }
            }
    
            // S'assurer que les données sont triées par date
            ksort($prisCounts);
            ksort($nonPrisCounts);
    
            return view('admin.dashboard', compact('validations','nonPris','pris', 'dates', 'prisCounts', 'nonPrisCounts'));
        }
    
    public function register(){
        return view('auth.register');
    }

    public function handleRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|same:password_confirmation',
            'password_confirmation' => 'required|same:password'
        ],[
            'name.required' => 'Nom obligatoire',
            'email.required' => 'Email obligatoire',
            'email.email' => 'Email invalide',
            'email.unique' => 'Email déjà utilisé',
            'password.required' => 'Mot de passe obligatoire',
            'password.min' => 'Mot de passe trop court',
            'password.same' => 'Confirmation du mot de passe incorrecte',
            'password_confirmation.required' => 'Confirmation le mot de passe',
            'password_confirmation.same' => 'Confirmation du mot de passe incorrecte'
        ]);

        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password =  bcrypt($request->password);
        $admin->save();

        return redirect()->route('login.admin')->with('success','Administrateur inscrit avec succès');

    }

    public function login(){
        return view('auth.login');
    }

    public function handleLogin(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email obligatoire',
            'email.email' => 'Email invalide',
            'password.required' => 'Mot de passe obligatoire'
        ]);
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.admin');
        }
    
        return redirect()->back()->withErrors(['email' => 'Email ou mot de passe incorrect']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.admin');
    }

    public function etat($id){
       $validation = Validation::findOrFail($id);
        return view('admin.etat', compact('validation'));
    }

    public function etatUpdate(Request $request, $id){
        $validation = Validation::find($id);
        $validation->etat = $request->etat;
        $validation->save();
        return redirect()->route('index.reforme')->with('success','Validation mise à jour avec succès');
    }

    public function delete($id){
        $validation = Validation::find($id);
        $validation->delete();
        return redirect()->route('index.reforme')->with('success','Validation supprimée avec succès');
    }

    public function reformePrise(){
        $validations = Validation::where('etat', 'Pris')->get();
        return view('admin.reformePrise', compact('validations'));
    }

    public function reformeNonPrise(){
        $validations = Validation::where('etat', 'Non Pris')->get();
        return view('admin.reformeNonPrise', compact('validations'));
    }
    
}
