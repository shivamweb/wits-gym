<?php

use App\Http\Controllers\AdminGymController;
use Illuminate\Support\Facades\Route;

// Route::prefix('admin')->group(function () {
// });
Route::get('/viewGymInfo', [AdminGymController::class, 'viewGymInfo']);

Route::post('/addGymByAdmin', [AdminGymController::class, 'addGymDetailsByAdmin']);