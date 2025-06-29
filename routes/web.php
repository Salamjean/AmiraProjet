<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CsvImportController;
use App\Http\Controllers\ValidationController;
use App\Http\Controllers\ValidationImportController;
use App\Http\Controllers\VehiculeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.template');
})->name('home');

Route::get('/create/reforme',[ValidationController::class,'create'])->name('create.reforme');
Route::get('/index/reforme',[ValidationController::class,'index'])->name('index.reforme');
Route::post('/store/reforme',[ValidationController::class,'store'])->name('store.reforme');
Route::get('/download-pdf/{id}', [ValidationController::class, 'downloadPDF'])->name('download.pdf');


Route::get('/dashboard/admin',[AdminController::class,'dashboard'])->name('dashboard.admin');
Route::get('/register/admin',[AdminController::class,'register'])->name('register.admin');
Route::post('/store/admin',[AdminController::class,'handleRegister'])->name('handleRegister.admin');
Route::get('/login/admin',[AdminController::class,'login'])->name('login.admin');
Route::post('/login/admin',[AdminController::class,'handleLogin'])->name('handleLogin.admin');
Route::get('/logout/admin',[AdminController::class,'logout'])->name('logout.admin');
Route::get('/etat/admin/{id}',[AdminController::class,'etat'])->name('etat.admin');
Route::put('/etatUpdate/admin/{id}',[AdminController::class,'etatUpdate'])->name('etatUpdate.admin');
Route::delete('/delete/admin/{id}',[AdminController::class,'delete'])->name('delete.admin');

Route::get('/reforme/pris',[AdminController::class,'reformePrise'])->name('reforme.prise');
Route::get('/reforme/non/pris',[AdminController::class,'reformeNonPrise'])->name('reforme.nonprise');


Route::get('/csv/import', [CsvImportController::class, 'showImportForm'])->name('csv.import.form');
Route::post('/csv/import', [CsvImportController::class, 'import'])->name('csv.import');



// routes de gestions des importations de vehicules 
Route::get('/vehicule/import/import',[VehiculeController::class, 'listes'])->name('vehicule.listes.import');
Route::post('/vehicule/import/store',[VehiculeController::class, 'store'])->name('vehicule.store');
Route::controller(VehiculeController::class)->group(function() {
    Route::get('/vehicules', 'index')->name('vehicules.index');
    Route::get('/vehicules/export', 'export')->name('vehicules.export');
    Route::post('/vehicules/import', 'import')->name('vehicules.import');
});


