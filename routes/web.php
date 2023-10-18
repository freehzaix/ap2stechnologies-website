<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/a-propos', [PageController::class, 'about'])->name('about');
Route::get('/nos-services', [PageController::class, 'service'])->name('service');
Route::get('/nous-contacter', [PageController::class, 'contact'])->name('contact');

Route::post('/demander-un-devis', [DevisController::class, 'devis_post'])->name('devis.post');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard-devis', [AuthController::class, 'devis'])->name('devis');
Route::get('/dashboard-contact', [AuthController::class, 'contact'])->name('contacts');
Route::get('/login', [AuthController::class, 'login_get'])->name('login.get');
Route::post('/login/post', [AuthController::class, 'login_post'])->name('login.post');
Route::get('/dashboard/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/nouscontacter/post', [ContactController::class, 'contact_post'])->name('contact.post');
