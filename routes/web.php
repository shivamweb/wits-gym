<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GymCouponController;
use App\Http\Controllers\GymStaffController;
use App\Http\Controllers\GymSubscriptionController;
use App\Http\Controllers\GymDetailController;
use App\Http\Controllers\GymUserController;
use App\Traits\SessionTrait;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [GymDetailController::class, 'showDashboard'])->name('dashboard');

Route::get('/', function () {
    return view('GymOwner.login');
})->name('login');

Route::get('/logout',[GymDetailController::class, 'logouGymUser'] )->name('logout');

Route::get('/register', function () {
    return view('GymOwner.register');
})->name('register');

Route::post('/register',[GymDetailController::class, 'registerGym'] )->name('registerGym');
// Route::get('/viewGymInfo', [AdminGymController::class, 'viewGymInfo']);

Route::get('/packages', [AdminController::class, 'showPackages']);
Route::get('/personalTraining', [AdminController::class, 'showPersonalTraining']);
Route::get('/news', [AdminController::class, 'showNews']);

Route::get('/addNews', [AdminController::class, 'showAddNews']);


Route::get('/eventItems', [AdminController::class, 'showEventItems']);

Route::get('/eventLists', [AdminController::class, 'showEventLists']);

Route::get('/courseSchedule', [AdminController::class, 'showCourseSchedule']);

Route::get('/trainers', [AdminController::class, 'showTrainers']);

Route::get('/rooms', [AdminController::class, 'showRooms']);

Route::get('/addUsers', [AdminController::class, 'showAddUsers']);

Route::get('/userPayment', [AdminController::class, 'showUserPayment']);

Route::get('/gymProfile', [GymDetailController::class, 'showGymProfile'])->name('showGymProfile');

Route::get('/gym-subscription', [GymSubscriptionController::class, 'listSubscriptionPlan'])->name('listSubscriptionPlan');
Route::post('/gym-subscription', [GymSubscriptionController::class, 'createGymSubscriptionPlan']);

Route::get('/gym-staff', [GymStaffController::class, 'listGymStaff'])->name('listGymStaff');
Route::post('/gym-staff', [GymStaffController::class, 'addGymStaff']);

Route::post('/add-user-by-gym', [GymUserController::class, 'addUserByGym'])->name('addUserByGym');
Route::get('/listUser', [GymUserController::class, 'listGymUser'])->name('listGymUser');

Route::post('/gym-login', [GymDetailController::class, 'gymLogin'])->name('gymLogin');

Route::get('/gym-coupon', [GymCouponController::class, 'listGymCoupons'])->name('listGymCoupons');
Route::post('/gym-coupon', [GymCouponController::class, 'addGymCoupon']);

Route::post('/updateGym', [GymDetailController::class,'updateGym'])->name('updateGym');

