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

Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

	// Data master faq
	Route::get('/master-faq', [App\Http\Controllers\FaqController::class, 'index'])->name('master-faq');
	Route::get('/json-faq', [App\Http\Controllers\FaqController::class, 'json'])->name('json-faq');
	Route::get('/master-faq/add', [App\Http\Controllers\FaqController::class, 'add'])->name('master-faq.add');
	Route::get('/master-faq/action-add', [App\Http\Controllers\FaqController::class, 'actionAdd'])->name('master-faq.action-add');
	Route::get('/master-faq/edit/{id}', [App\Http\Controllers\FaqController::class, 'add'])->name('master-faq.edit');
	Route::get('/master-faq/hapus/{id}', [App\Http\Controllers\FaqController::class, 'add'])->name('master-faq.hapus');
});
