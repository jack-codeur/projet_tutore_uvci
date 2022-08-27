<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [FrontController::class, 'index'])->name('front');


//////////////////////////////// ESPACE ADMINISTRATION ///////////////////////////////////


Route::get('/dashboard/actualite', [HomeController::class, 'actualites'])->name('actualite');

Route::get('/dashboard/utilisateur', [HomeController::class, 'utilisateurs'])->name('utilisateur');

Route::get('/dashboard/pharmacie', [HomeController::class, 'pharmacies'])->name('pharmacie');

Route::get('/dashboard/hopital', [HomeController::class, 'hopitals'])->name('hopital');

Route::get('/dashboard/associa_commerçant', [HomeController::class, 'associa_Commerçants'])->name('associa_Commerçant');

Route::get('/dashboard/jeune', [HomeController::class, 'associa_jeunes'])->name('associa_jeune');

Route::get('/dashboard/ethnie', [HomeController::class, 'associa_ethnies'])->name('associa_ethnie');

Route::get('/dashboard/religieux', [HomeController::class, 'associa_religieuses'])->name('associa_religieuse');

Route::get('/dashboard/message', [HomeController::class, 'messages'])->name('message');