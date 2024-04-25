<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('GymOwner.dashboard');
});

Route::get('/', function () {
    return view('GymOwner.login');
});

Route::get('/register', function () {
    return view('GymOwner.register');
});

Route::get('/viewGymInfo', [AdminController::class, 'viewGymInfo']);
Route::get('/packages', [AdminController::class, 'showPackages']);
Route::get('/personalTraining', [AdminController::class, 'showPersonalTraining']);
Route::get('/news', [AdminController::class, 'showNews']);

Route::get('/addNews', [AdminController::class, 'showAddNews']);


Route::get('/eventItems', [AdminController::class, 'showEventItems']);

Route::get('/eventLists', [AdminController::class, 'showEventLists']);

Route::get('/courseSchedule', [AdminController::class, 'showCourseSchedule']);

Route::get('/courses', [AdminController::class, 'showCourses']);

Route::get('/trainers', [AdminController::class, 'showTrainers']);

Route::get('/rooms', [AdminController::class, 'showRooms']);

Route::get('/addUsers', [AdminController::class, 'showAddUsers']);

Route::get('/userList', [AdminController::class, 'showUserList']);

Route::get('/userPayment', [AdminController::class, 'showUserPayment']);

Route::get('/userProfile', [AdminController::class, 'showUserProfile']);
