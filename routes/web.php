<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get("/login/{langue}/",function(\Illuminate\Http\Request $request ,$langue){
    \App::setLocale($langue);
   return view("authentification/login");
});

Route::get("/login/",function(\Illuminate\Http\Request $request){
    \App::setLocale("fr");
    return view("authentification/login");
});

Route::post("/submit_login",[\App\Http\Controllers\LoginUtilisateur::class,"connecter_utilisateur"]);
