<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCouponController;
use App\Http\Controllers\AdminEnquiryController;
use App\Http\Controllers\AdminGymController;
use App\Http\Controllers\AdminSubscriptionController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdvertismentController;

use App\Http\Controllers\DesignationController;

use Illuminate\Support\Facades\Route;

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
Route::get('/viewEditUser/{uuid}', [AdminUserController::class, 'viewEditUser'])->name('viewEditUser');
Route::post('/updateAdminUser', [AdminUserController::class,'updateAdminUser'])->name('updateAdminUser');

Route::get('/listEnquiry', [AdminEnquiryController::class, 'listEnquiry'])->name('listEnquiry');
Route::get('/viewAdminEnquiry/{uuid}', [AdminEnquiryController::class, 'viewAdminEnquiry'])->name('viewAdminEnquiry');
Route::get('/payment', function () {
    return view('admin.payment');
});
// Route::get('/coupon', function () {
//     return view('admin.coupon');
// });
// Route::get('/advertisement', function () {
//     return view('admin.advertisment');
// });
Route::get('/userNotification', function () {
    return view('admin.userNotification');
});
Route::get('/gymNotification', function () {
    return view('admin.gymNotification');
});
Route::get('/adminUserprofile', function () {
    return view('admin.adminUser.adminUserprofile');
});

Route::get('/viewAdminCoupons', [AdminCouponController::class, 'viewAdminCoupons'])->name('viewAdminCoupons');
Route::post('/addAdminCoupon', [AdminCouponController::class, 'addAdminCoupon'])->name('addAdminCoupon');
Route::get('/editViewCoupon', [AdminCouponController::class, 'editViewCoupon'])->name('editViewCoupon');
Route::post('/updateAdminCoupon', [AdminCouponController::class, 'updateAdminCoupon'])->name('updateAdminCoupon');

Route::get('/viewAdvertisment', [AdvertismentController::class, 'viewAdvertisment'])->name('viewAdvertisment');
Route::post('/addAdvertisment', [AdvertismentController::class, 'addAdvertisment'])->name('addAdvertisment');

Route::get('/viewDesignation', [DesignationController::class, 'viewDesignation'])->name('viewDesignation');
Route::post('/addDesignation', [DesignationController::class, 'addDesignation'])->name('addDesignation');
Route::delete('/deleteDesignation/{uuid}', [DesignationController::class, 'deleteDesignation'])->name('deleteDesignation');
