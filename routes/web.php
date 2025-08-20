<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,'index'])->name('user_home');
Route::post('/import-userData',[UserController::class,'importData'])->name('import_userData');
