<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\UsersExportController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\infoController;
use App\Http\Controllers\CustomAuthController;

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

// Route::get('/', function () {
//     return view('familyInfo');
// });
Route::get('contact',[ContactController::Class,'index'])->name('contact');;
Route::get('searchEdu',[EducationController::Class,'index'])->name('searchEdu');;
Route::get('searchInfo',[infoController::Class,'index'])->name('searchInfo');;
Route::get('searchTransport',[TransportController::Class,'index'])->name('searchTransport');;
Route::get('searchTravel',[TravelController::Class,'index'])->name('searchTravel');;
Route::get('searchWork',[WorkController::Class,'index'])->name('searchWork');;
Route::get('moreInfo/{id}',[infoController::Class,'show'])->name('moreInfo');;

Route::get('/',[infoController::Class,'index']);
Route::post('/searchWork',[WorkController::Class,'search']);
Route::post('/searchTravel',[TravelController::Class,'search']);
Route::post('/searchTransport',[TransportController::Class,'search']);
Route::post('/searchInfo',[infoController::Class,'search']);
Route::post('/searchEdu',[EducationController::Class,'search']);
Route::get('/user/export', [UsersExportController::class, 'export'])->name('export');
Route::get('pdf_file/{id}', [PDFController::class, 'show'])->name('pdf');
Route::get('/index/{id}',[infoController::Class,'displayFamilyInfo'])->name('index');

// Route::get('/index', function () {
//     return view('familyInfo');
// });

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
