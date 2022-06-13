<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\RestApiController;

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

  
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('fetch-general', [RestApiController::class, 'fetchGeneral'])->name('fetch-general');
Route::get('fetch-characters', [RestApiController::class, 'fetchCharacters'])->name('fetch-characters');
Route::get('fetch-locations', [RestApiController::class, 'fetchLocations'])->name('fetch-locations');
Route::get('fetch-episodes', [RestApiController::class, 'fetchEpisodes'])->name('fetch-episodes');
