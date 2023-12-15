<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AnnouncmentController;

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

Route::get('/',[PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo',[PublicController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contattaci',[PublicController::class, 'contactUs'])->name('contactUs');
Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('submit');
/* announcments controller */
Route::get('/announcments/new',[AnnouncmentController::class,'new'])->name('nuovi');
Route::get('/announcments/index',[AnnouncmentController::class, 'index'])->name('annunci');
Route::get('/announcments/show/{id}',[AnnouncmentController::class, 'show'])->name('annunci.show');

Route::get('/announcments/create', [AnnouncmentController::class, 'create'])->name('annunci.create');
Route::post('/announcments/store', [AnnouncmentController::class, 'store'])->name('annunci.store');