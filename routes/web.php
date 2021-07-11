<?php

use Illuminate\Support\Facades\Route;



Route::get('/student', [App\Http\Controllers\StudentController::class, 'index']) -> name('student.index');
Route::get('/student/create', [App\Http\Controllers\StudentController::class, 'create']) -> name('student.create');
Route::get('/student/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit']) -> name('student.edit');
Route::get('/student/show/{id}', [App\Http\Controllers\StudentController::class, 'show']) -> name('student.show');
Route::post('/student/store', [App\Http\Controllers\StudentController::class, 'store']) -> name('student.store');
Route::get('/student/destroy/{id}', [App\Http\Controllers\StudentController::class, 'destroy']) -> name('student.destroy');
Route::post('/student/update/{id}', [App\Http\Controllers\StudentController::class, 'update']) -> name('student.update');
