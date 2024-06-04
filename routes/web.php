<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RuleShowController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KecanduanController;
use App\Http\Controllers\BasisAturanController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/dashboard/diagnosa', [DiagnosaController::class, 'index'])->middleware('auth');
// Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/riwayat', RiwayatController::class)->middleware('auth');
Route::resource('/dashboard/kecanduan', KecanduanController::class)->middleware('auth');
Route::resource('/dashboard/gejala', GejalaController::class)->middleware('auth');
Route::resource('/dashboard/basis-aturan', BasisAturanController::class)->middleware('auth');
Route::resource('/dashboard/pengguna', PenggunaController::class)->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('dashboard/basis-aturan/data/{kecanduan:id}', [RuleShowController::class, 'index']);