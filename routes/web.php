<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ConferenceController;
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

Route::resource('conference', ConferenceController::class);

Route::get('/', function () {
//    return view('welcome');
    return view('auth/registration');
});
//Route::get('/', function () {
////    return view('welcome');
//    return view('conference');
//});

Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');

Route::post('custom-registration', [CustomAuthController::class, 'custom_registration'])->name('register.custom');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::post('custom-login', [CustomAuthController::class, 'custom_login'])->name('login.custom');

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::get('conference', [ConferenceController::class, 'index'])->name('conference');

Route::get('conference/fetch_all', [ConferenceController::class, 'fetch_all'])->name('conference.fetch_all');

Route::get('conference/add', [ConferenceController::class, 'add'])->name('add');

Route::post('conference/add_validation', [ConferenceController::class, 'add_validation'])->name('conference.add_validation');

//Route::post('conference/edit_validation', [ConferenceController::class, 'edit_validation'])->name('conference.edit_validation');

//Route::get('conference/id', [ConferenceController::class, 'show'])->name('show_conference');
