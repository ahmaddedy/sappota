<?php

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

Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('/');
Auth::routes();

Route::get('/web', [App\Http\Controllers\WebController::class, 'index'])->name('web');
Route::get('/faq', [App\Http\Controllers\WebController::class, 'faq'])->name('faq');
