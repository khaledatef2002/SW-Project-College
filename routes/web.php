<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SemestersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::name('semesters.')->group(function () {
    Route::get('/semesters', [SemestersController::class, 'view'])->name('index');
    Route::get('/semester/add', [SemestersController::class, 'viewCreate'])->name('create');
    Route::get('/semester/edit/{semester}', [SemestersController::class, 'viewUpdate'])->name('edit');
    Route::put('/semester/update/{semester}', [SemestersController::class, 'update'])->name('update');
    Route::post('/semester/store', [SemestersController::class, 'create'])->name('store');
    Route::delete('/semester/delete/{semester}', [SemestersController::class, 'delete'])->name('delete');
});

Route::name('doctors.')->group(function () {
    Route::get('/doctors', [DoctorController::class, 'view'])->name('index');
    Route::get('/doctor/add', [DoctorController::class, 'viewCreate'])->name('create');
    Route::get('/doctor/edit/{doctor}', [DoctorController::class, 'viewUpdate'])->name('edit');
    Route::put('/doctor/update/{doctor}', [DoctorController::class, 'update'])->name('update');
    Route::post('/doctor/store', [DoctorController::class, 'create'])->name('store');
    Route::delete('/doctor/delete/{doctor}', [DoctorController::class, 'delete'])->name('delete');
});

Route::name('courses.')->group(function () {
    Route::get('/courses', [CourseController::class, 'view'])->name('index');
    Route::get('/course/add', [CourseController::class, 'viewCreate'])->name('create');
    Route::get('/course/edit/{course}', [CourseController::class, 'viewUpdate'])->name('edit');
    Route::put('/course/update/{course}', [CourseController::class, 'update'])->name('update');
    Route::post('/course/store', [CourseController::class, 'create'])->name('store');
    Route::delete('/course/delete/{course}', [CourseController::class, 'delete'])->name('delete');
});
