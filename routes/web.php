<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GymStaffController;
use App\Http\Controllers\GymSubscriptionController;
use App\Http\Controllers\AdminGymController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('GymOwner.dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('GymOwner.login');
});

Route::get('/register', function () {
    return view('GymOwner.register');
});
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

Route::get('/userList', [AdminController::class, 'showUserList']);

Route::get('/userPayment', [AdminController::class, 'showUserPayment']);

Route::get('/userProfile', [AdminController::class, 'showUserProfile']);

Route::get('/gym-subscription', [GymSubscriptionController::class, 'listSubscriptionPlan']);
Route::post('/add-gym-subscription', [GymSubscriptionController::class, 'createGymSubscriptionPlan']);

Route::get('/gym-staff', [GymStaffController::class, 'listGymStaff']);
Route::post('/add-gym-staff', [GymStaffController::class, 'addGymStaff']);
