<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PenyakitController;
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
Route::get('/dashboard/riwayat', [RiwayatController::class, 'index'])->middleware('auth');
Route::get('/dashboard/kecanduan', [KecanduanController::class, 'index'])->middleware('auth');
Route::get('/dashboard/gejala', [GejalaController::class, 'index'])->middleware('auth');
Route::get('/dashboard/basis-aturan', [BasisAturanController::class, 'index'])->middleware('auth');
Route::get('/dashboard/pengguna', [PenggunaController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);