<?php

use App\Http\Controllers\EmpController;
use App\Models\emp;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard',[EmpController::class,'dashboard']);
Route::get('/',[EmpController::class,'addform'])->name('emp.add');
Route::post('/',[EmpController::class,'add'])->name('emp.show');
Route::get('/show',[EmpController::class,'show'])->name('emp.show');
Route::get('/delete/{id}',[EmpController::class,'delete'])->name('emp.delete');
Route::get('/edit/{id}',[EmpController::class,'edit'])->name('emp.edit');
Route::post('/update/{id}',[EmpController::class,'update'])->name('emp.update');
Route::get('/show/trash',[EmpController::class,'showtrash'])->name('emp.trash');
Route::get('/permdelete/{id}',[EmpController::class,'fdelete'])->name('emp.permdelete');
Route::get('/restore/{id}',[EmpController::class,'restore'])->name('emp.restore');

//
