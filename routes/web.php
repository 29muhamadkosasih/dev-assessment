<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AK04Controller;
use App\Http\Controllers\AK05Controller;
use App\Http\Controllers\AK06Controller;
use App\Http\Controllers\BankController;
use App\Http\Controllers\APL01Controller;
use App\Http\Controllers\APL02Controller;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ValidasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaterkitController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\KompetensiController;
use App\Http\Controllers\Validasi02Controller;
use App\Http\Controllers\Kompetensi02Controller;
use App\Http\Controllers\Admin\PermissionController;
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
    return view('auth.login');
});

Route::get('/maintenance', function () {
    return view('layouts.maintenance');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('home', [StaterkitController::class, 'home'])->name('home');
    Route::get('lang/{locale}', [LanguageController::class, 'swap']);
    Route::get('layouts/empty', [StaterkitController::class, 'layout_empty'])->name('layout.empty');
    Route::post('import-file', [SkemaController::class, 'import'])->name('import');
    Route::post('apl_02/get/answer', [APL02Controller::class, 'getAnswer'])->name('getAnswer');
    Route::get('apl_01/get', [APL01Controller::class, 'get'])->name('get.apl01');
    Route::get('apl_02/get', [APL02Controller::class, 'get'])->name('get.apl02');
    Route::put('validasi/post/{id}', [ValidasiController::class, 'validasi'])->name('validasi');
    Route::get('cetak_pdf/{id}', [APL01Controller::class, 'pdf']);
    Route::get('apl_02/cetak_pdf/{id}', [APL02Controller::class, 'pdf']);
    Route::get('kompetensi02/get', [Kompetensi02Controller::class, 'get'])->name('get.kompetensi02');
    Route::get('kompetensi02/edit_sub/{id}', [Kompetensi02Controller::class, 'edit_sub'])->name('kompetensi02.edit_sub');
    Route::put('kompetensi02/edit_sub/{id}', [Kompetensi02Controller::class, 'update_sub'])->name('kompetensi02.update_sub');
    Route::get('apl_01/download/{file}', [APL01Controller::class, 'download'])->name('apl_01.download');
    Route::resource('/users', UserController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class)->except(['show']);
    Route::resource('bank', BankController::class);
    Route::resource('dashboard', DashboardController::class);
    Route::resource('apl_01', APL01Controller::class);
    Route::resource('apl_02', APL02Controller::class);
    Route::resource('skema', SkemaController::class);
    Route::resource('kompetensi', KompetensiController::class);
    Route::resource('kompetensi02', Kompetensi02Controller::class);
    Route::resource('validasi', ValidasiController::class);
    Route::resource('validasi02', Validasi02Controller::class);
    Route::resource('fr_ak_04', AK04Controller::class);
    Route::resource('fr_ak_05', AK05Controller::class);
    Route::resource('fr_ak_06', AK06Controller::class);
});