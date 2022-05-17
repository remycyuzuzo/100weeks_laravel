<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\PersonnelController;

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

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

// Login
Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [LoginController::class, 'login']);

// Beneficiaries
Route::get('/beneficiaries', [BeneficiaryController::class, 'index'])
    ->name('beneficiaries')
    ->middleware('auth');

Route::get('/beneficiaries/new', [BeneficiaryController::class, 'index'])
    ->name('new-beneficiary')
    ->middleware('auth');

// Personnel/coaches
Route::get('/users/{personnel}/new', [PersonnelController::class, 'create'])
    ->name('new-personnel')
    ->middleware('auth');

Route::post('/users/{personnel}/new', [PersonnelController::class, 'store']);
Route::get('/users', [PersonnelController::class, 'index'])
    ->middleware('auth');
