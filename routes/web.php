<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('/tabel', [UserController::class,'tabel'])->name('tabel');
Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');
Route::post('/terima/{id}', [UserController::class, 'terima'])->name('terima');
Route::post('/tolak/{id}', [UserController::class, 'tolak'])->name('tolak');
Route::post('/registrasi', [UserController::class, 'registrasi'])->name('registrasi');


