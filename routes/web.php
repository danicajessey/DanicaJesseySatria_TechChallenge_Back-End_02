<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;


Route::get("/", [CompanyController::class,'show'])->name('show');

Route::get("/create", [CompanyController::class,'create'])->name('create');

Route::post("/store", [CompanyController::class,'store'])->name('store');

Route::get('/edit/{id}', [CompanyController::class,'edit'])->name('edit');

Route::patch('/update/{id}', [CompanyController::class,'update'])->name('update');

Route::delete('/delete/{id}', [CompanyController::class,'delete'])->name('delete');

