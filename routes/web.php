<?php

use App\Http\Controllers\ContaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',  [ContaController::class, 'index'])->name('conta.index');
Route::get('/create-contas',  [ContaController::class, 'create'])->name('conta.create');
Route::post('/store-contas',  [ContaController::class, 'store'])->name('conta.store');
Route::get('/show-contas/{conta}',  [ContaController::class, 'show'])->name('conta.show');
Route::get('/edit-contas/{conta}',  [ContaController::class, 'edit'])->name('conta.edit');
Route::put('/update-contas/{conta}',  [ContaController::class, 'update'])->name('conta.update');
Route::delete('/destroy-contas/{conta}',  [ContaController::class, 'destroy'])->name('conta.destroy');