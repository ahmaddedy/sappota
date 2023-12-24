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

// insert data pemohon
Route::post('/add-data-pemohon', [App\Http\Controllers\WebController::class, 'addDataPemohon'])->name('add-data-pemohon');

// cek apakah ktp pernah terdaftar
Route::get('/cek-nik', [App\Http\Controllers\WebController::class, 'cekNik'])->name('cek-nik');

// menampilkan riwayat permohonan dari nik
Route::get('/riwayat-permohonan', [App\Http\Controllers\WebController::class, 'riwayatPermohonan'])->name('riwayat-permohonan');

// lacak permohonan by nik
Route::get('/lacak-permohonan', [App\Http\Controllers\WebController::class, 'lacakPermohonan'])->name('lacak-permohonan');

// aksi cek permohonan
Route::post('/cek-permohonan', [App\Http\Controllers\WebController::class, 'cekPermohonan'])->name('cek-permohonan');

// membuat permohonan baru
Route::get('/buat-permohonan', [App\Http\Controllers\WebController::class, 'buatPermohonan'])->name('buat-permohonan');

// insert data permohonan
Route::post('/add-data-permohonan', [App\Http\Controllers\WebController::class, 'addDataPermohonan'])->name('add-data-permohonan');

// detail data permohonan
Route::get('/detail-permohonan/{id}', [App\Http\Controllers\WebController::class, 'detailPermohonan'])->name('detail-permohonan');

// input data pohon
Route::get('/input-data-pohon/{id}', [App\Http\Controllers\WebController::class, 'inputDataPohon'])->name('input-data-pohon');

// insert data pohon
Route::post('/add-data-pohon', [App\Http\Controllers\WebController::class, 'addDataPohon'])->name('add-data-pohon');

// pilih kelurahan
Route::get('/pilih-kel/{id}', [App\Http\Controllers\WebController::class, 'pilihKel'])->name('pilih-kel');

// ajukan permohonan
Route::get('/ajukan-permohonan/{id}', [App\Http\Controllers\WebController::class, 'ajukanPermohonan'])->name('ajukan-permohonan');

// download permohonan
Route::get('/download-permohonan/{id}', [App\Http\Controllers\WebController::class, 'downloadPermohonan'])->name('download-permohonan');


// download pernyataan
Route::get('/download-pernyataan/{id}', [App\Http\Controllers\WebController::class, 'downloadPernyataan'])->name('download-pernyataan');

// submit permohonan
Route::post('/submit-permohonan', [App\Http\Controllers\WebController::class, 'submitPermohonan'])->name('submit-permohonan');


// menampilkan faq
Route::get('/faq', [App\Http\Controllers\WebController::class, 'faq'])->name('faq');

// menampilkan sop
Route::get('/sop', [App\Http\Controllers\WebController::class, 'sop'])->name('sop');

// Halaman Admin
Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

	// Data Pengajuan
	Route::get('/json-pengajuan', [App\Http\Controllers\PengajuanController::class, 'json'])->name('json-pengajuan');
	Route::prefix('pengajuan')->group(function () {
		Route::get('/', [App\Http\Controllers\PengajuanController::class, 'index'])->name('pengajuan');
		Route::get('/verif/{id}', [App\Http\Controllers\PengajuanController::class, 'verif'])->name('pengajuan.verif');
		Route::post('/action-verif', [App\Http\Controllers\PengajuanController::class, 'actionVerif'])->name('pengajuan.action-verif');
		Route::get('/upload-telaah/{id}', [App\Http\Controllers\PengajuanController::class, 'uploadTelaah'])->name('upload-telaah');
		Route::post('/submit-telaah', [App\Http\Controllers\PengajuanController::class, 'submitTelaah'])->name('pengajuan.submit-telaah');
		Route::get('/buat-surat-izin/{id}', [App\Http\Controllers\PengajuanController::class, 'buatSuratIzin'])->name('buat-surat-izin');
		Route::post('/submit-surat-izin', [App\Http\Controllers\PengajuanController::class, 'submitSuratIzin'])->name('pengajuan.submit-surat-izin');
	});

	Route::get('/json-surat-izin', [App\Http\Controllers\SuratIzinController::class, 'json'])->name('json-surat-izin');
	Route::prefix('surat-izin')->group(function () {
		Route::get('/', [App\Http\Controllers\SuratIzinController::class, 'index'])->name('surat-izin');
		Route::get('/pdf/{id}', [App\Http\Controllers\SuratIzinController::class, 'generatePdf'])->name('surat-izin.pdf');
		Route::get('/upload/{id}', [App\Http\Controllers\SuratIzinController::class, 'formUpload'])->name('surat-izin.upload');
		Route::post('/action-upload', [App\Http\Controllers\SuratIzinController::class, 'actionUpload'])->name('surat-izin.action-upload');
	});

	// Data master faq
	Route::get('/json-faq', [App\Http\Controllers\FaqController::class, 'json'])->name('json-faq');
	Route::prefix('master-faq')->group(function () {
		Route::get('/', [App\Http\Controllers\FaqController::class, 'index'])->name('master-faq');
		Route::get('/add', [App\Http\Controllers\FaqController::class, 'add'])->name('master-faq.add');
		Route::post('/action-add', [App\Http\Controllers\FaqController::class, 'actionAdd'])->name('master-faq.action-add');
		Route::get('/edit/{id}', [App\Http\Controllers\FaqController::class, 'edit'])->name('master-faq.edit');
		Route::post('/action-edit', [App\Http\Controllers\FaqController::class, 'actionEdit'])->name('master-faq.action-edit');
		Route::get('/hapus/{id}', [App\Http\Controllers\FaqController::class, 'hapus'])->name('master-faq.hapus');
	});

	// Data master sop
	Route::get('/json-sop', [App\Http\Controllers\SopController::class, 'json'])->name('json-sop');
	Route::prefix('master-sop')->group(function () {
		Route::get('/', [App\Http\Controllers\SopController::class, 'index'])->name('master-sop');
		Route::get('/add', [App\Http\Controllers\SopController::class, 'add'])->name('master-sop.add');
		Route::post('/action-add', [App\Http\Controllers\SopController::class, 'actionAdd'])->name('master-sop.action-add');
		Route::get('/edit/{id}', [App\Http\Controllers\SopController::class, 'edit'])->name('master-sop.edit');
		Route::post('/action-edit', [App\Http\Controllers\SopController::class, 'actionEdit'])->name('master-sop.action-edit');
		Route::get('/hapus/{id}', [App\Http\Controllers\SopController::class, 'hapus'])->name('master-sop.hapus');
	});

	// Data master user
	Route::get('/json-user', [App\Http\Controllers\UserController::class, 'json'])->name('json-faq');
	Route::prefix('master-user')->group(function () {
		Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('master-user');
		Route::get('/add', [App\Http\Controllers\UserController::class, 'add'])->name('master-user.add');
		Route::post('/action-add', [App\Http\Controllers\UserController::class, 'actionAdd'])->name('master-user.action-add');
		Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('master-user.edit');
		Route::post('/action-edit', [App\Http\Controllers\UserController::class, 'actionEdit'])->name('master-user.action-edit');
		Route::get('/reset/{id}', [App\Http\Controllers\UserController::class, 'reset'])->name('master-user.reset');
		Route::post('/action-reset', [App\Http\Controllers\UserController::class, 'actionReset'])->name('master-user.action-reset');
		Route::get('/hapus/{id}', [App\Http\Controllers\UserController::class, 'hapus'])->name('master-user.hapus');
	});
});
