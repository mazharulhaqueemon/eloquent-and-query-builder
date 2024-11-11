<?php

use App\Http\Controllers\QuaryBuilderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/student',[StudentController::class, 'getStudent']);
Route::get('/queries',[QuaryBuilderController::class, 'queries']);