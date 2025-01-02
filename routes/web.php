<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/homee', [FrontController::class, 'home'])->name('homee');
Route::get('/note/{id}', [FrontController::class, 'note'])->name('note');
Route::get('/project/data/{id}', [FrontController::class, 'project_data'])->name('project.data');
Route::get('/profile', [FrontController::class, 'profile'])->name('profile');
