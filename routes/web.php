<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenerimaanController;
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

Route::get('/', [PenerimaanController::class, 'index'])->name('penerimaan.index');
Route::get('/penerimaan/create', [PenerimaanController::class, 'create'])->name('penerimaan.create');
Route::post('/penerimaan/add', [PenerimaanController::class, 'store'])->name('penerimaan.add');
