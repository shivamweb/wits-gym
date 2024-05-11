<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEnquiryController;
use App\Http\Controllers\AdminGymController;
use App\Http\Controllers\AdminSubscriptionController;
use App\Http\Controllers\AdminUserController;
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

Route::get('/addAdminUsers', [AdminUserController::class, 'showAddUsers']);
Route::post('/add-user-by-admin', [AdminUserController::class, 'addUserByadmin'])->name('addUserByadmin');
Route::get('/adminUserList', [AdminUserController::class, 'adminUserList'])->name('adminUserList');

Route::get('/listEnquiry', [AdminEnquiryController::class, 'listEnquiry'])->name('listEnquiry');
Route::get('/viewAdminEnquiry/{uuid}', [AdminEnquiryController::class, 'viewAdminEnquiry'])->name('viewAdminEnquiry');
Route::get('/payment', function () {
    return view('admin.payment');
});
Route::get('/coupen', function () {
    return view('admin.coupen');
});
Route::get('/advertisement', function () {
    return view('admin.advertisment');
});
Route::get('/userNotification', function () {
    return view('admin.userNotification');
});
Route::get('/adminUserprofile', function () {
    return view('admin.adminUser.adminUserprofile');
});
