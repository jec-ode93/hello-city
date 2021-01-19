<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VueController;
use App\Http\Controllers\PhotoController;
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

// Route::get('vue', function(){
//     return view('vue');
// });

// Route::get('contact', function(){
//     return view('contact');
// });

// Route::get('/', [ContactController::class, 'index'])->name('home');
// Route::get('/', [ContactController::class, 'index']);
Route::get('/vue', [VueController::class, 'show']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/photo', [PhotoController::class, 'create']);
Route::post('/photo', [PhotoController::class, 'store']);
