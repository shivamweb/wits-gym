<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminGymController;
use App\Http\Controllers\AdminSubscriptionController;
use App\Models\AdminSubscription;
use Illuminate\Support\Facades\Route;

// Route::prefix('admin')->group(function () {
// });
Route::get('/viewGymInfo', [AdminGymController::class, 'viewGymInfo']);

Route::get('/adminDashboard', [AdminController::class, 'adminDashboard']);


Route::get('/viewGymList', [AdminGymController::class, 'viewGymList']);


Route::post('/addGymByAdmin', [AdminGymController::class, 'addGymDetailsByAdmin'])->name('addGymByAdmin');
// Route::post('/addTermsAndConditions', [AdminGymController::class, 'addTermsAndConditions'])->name('addTAndC');
// Route::post('/addGymSocialLink', [AdminGymController::class, 'addGymSocialLink'])->name('addGymSocialLink');

Route::get('/viewAddAdminSubscription', [AdminSubscriptionController::class, 'viewAddAdminSubscription']);
Route::post('/addAdminSubscription', [AdminSubscriptionController::class, 'addAdminSubscription'])->name('addAdminSubscription');

