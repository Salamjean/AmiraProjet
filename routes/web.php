<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ValidationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.template');
})->name('home');

Route::get('/create/reforme',[ValidationController::class,'create'])->name('create.reforme');
Route::get('/index/reforme',[ValidationController::class,'index'])->name('index.reforme');
Route::post('/store/reforme',[ValidationController::class,'store'])->name('store.reforme');


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

