<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
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
    return view('welcome');
});

Route::get('/home',[BaseController::class,'home'])->name('home');
Route::get('/specialOffer',[BaseController::class,'specialOffer'])->name('specialOffer');
Route::get('/delivery',[BaseController::class,'delivery'])->name('delivery');
Route::get('/contact-us',[BaseController::class,'contact'])->name('contact-us');
