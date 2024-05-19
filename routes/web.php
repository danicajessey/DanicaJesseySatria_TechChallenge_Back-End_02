<?php

use App\Http\Controllers\FotoController;
use Illuminate\Support\Facades\Route;

Route::get("/", [FotoController::class,'show'])->name('show');

Route::get("/create", [FotoController::class,'create'])->name('create');

Route::post("/store", [FotoController::class,'store'])->name('store');

Route::delete('/delete/{id}', [FotoController::class,'delete'])->name('delete');
