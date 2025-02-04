<?php

use App\Http\Controllers\SalaryController;

Route::get('/salaries', [SalaryController::class, 'index']);
Route::post('/salaries', [SalaryController::class, 'store']);
Route::get('/salaries/averages', [SalaryController::class, 'getAverages']);