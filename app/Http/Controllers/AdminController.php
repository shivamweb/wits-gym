<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }


    public function showClubInfo()
    {
        return view('GymOwner.clubInfo');
    }

    public function showPackages()
    {
        return view('GymOwner.packages');
    }

    public function showPersonalTraining()
    {
        return view('GymOwner.personalTraining');
    }

    public function showNews()
    {
        return view('GymOwner.news');
    }

    public function showAddNews()
    {
        return view('GymOwner.addNews');
    }

    public function showEventItems()
    {
        return view('GymOwner.eventItem');
    }

    public function showEventLists()
    {
        return view('GymOwner.eventsList');
    }

    public function showCourseSchedule()
    {
        return view('GymOwner.courseSchedule');
    }

    public function showCourses()
    {
        return view('GymOwner.courses');
    }

    public function showTrainers()
    {
        return view('GymOwner.trainers');
    }

    public function showRooms()
    {
        return view('GymOwner.rooms');
    }

    public function showAddUsers()
    {
        return view('GymOwner.User.addUsers');
    }

    public function showUserList()
    {
        return view('GymOwner.userList');
    }

    public function showUserPayment()
    {
        return view('GymOwner.userPayment');
    }

    public function showUserProfile()
    {
        return view('GymOwner.userProfile');
    }
}
