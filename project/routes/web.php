<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::post('/login', [LoginController::class,"PostRegister"])->name('login');


Route::get('/dashbord',function(){
    return "enregistrement a ete effectuee avec success";
})->name('welcome');



Route::get('/welcome', function () {
    return view('login');
});

