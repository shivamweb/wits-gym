@extends('GymOwner.master1')
@section('title', 'User Profile')
@section('content')

<aside class="right-side right-padding">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h2 class="section_h2_margin_top">User Profile</h2>
        <ol class="breadcrumb">
            <li>
                <a href='index.html'>
                    <i class="fa fa-fw fa-home"></i> Dashboard
                </a>
            </li>
            <li>
                <a>User Profile</a>
            </li>
        </ol>
    </section>
    <!--section ends-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h5 class="panel-title">User Profile</h5>
                    </div>
                    <div class="panel-body">
                        <div role="tabpanel">
                            <!-- Nav tabs -->
                            <div class="terms">
                                <ul class="nav nav-tabs nav-custom " role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#Info" aria-controls="Info" role="tab" data-toggle="tab">
                                            <strong>USer Info</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#subscription" aria-controls="subscription" role="tab" data-toggle="tab">
                                            <strong>Subscription</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#workout" aria-controls="workout" role="tab" data-toggle="tab">
                                            <strong>Workout</strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#diet" aria-controls="diet" role="tab" data-toggle="tab">
                                            <strong>Diet </strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#bmi" aria-controls="bmi" role="tab" data-toggle="tab">
                                            <strong>BMI </strong>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#trainer" aria-controls="trainer" role="tab" data-toggle="tab">
                                            <strong>Trainer </strong>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="Info">
                                    <form action="{{ route('updateUser') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4 text-center">
                                                <div class="form-group pad-top">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail">
                                                            @if (isset($userDetail->image))
                                                            <img src="{{ $userDetail->image }}" alt="profile">
                                                            @else
                                                            <img src="" alt="profile">
                                                            @endif
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div class="select_align">
                                                            <span class="btn btn-primary btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="image">
                                                            </span>
                                                            <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-9 col-sm-8">
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered" id="users">
                                                            <tr>
                                                                <td>First Name</td>
                                                                <td>
                                                                    <input type="text" value="{{ $userDetail->first_name }}" required placeholder="enter first name" id="first_name" name="first_name" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Last Name</td>
                                                                <td>
                                                                    <input type="text" value="{{ $userDetail->last_name }}" required placeholder="enter last name" id="last_name" name="last_name" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Username</td>
                                                                <td>
                                                                    <input type="text" value="{{ $userDetail->username }}" required placeholder="enter username" id="fb-name" name="username" class="form-control">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>E-mail</td>
                                                                <td>
                                                                    <input type="text" value="{{ $userDetail->email }}" required placeholder="enter email" id="fb-name" name="email" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gender</td>
                                                                <td>
                                                                    <input type="text" value="{{ $userDetail->gender }}" required placeholder="enter user Gender" id="fb-name" name="gender" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone no</td>
                                                                <td>
                                                                    <input type="text" value="{{ $userDetail->phone_no }}" required placeholder="enter phone number" id="fb-name" name="phone_no" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Password</td>
                                                                <td>
                                                                    <input type="text" value="{{ $userDetail->password }}" required placeholder="enter password" id="fb-name" name="password" class="form-control">
                                                                    <input type="hidden" name="uuid" id="uuid" value="{{ $userDetail->uuid }}">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-2 col-md-9">
                                                                    <input type="submit" class="btn btn-primary" value="Update"> &nbsp;
                                                                    <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                                    <input type="reset" class="btn btn-default" value="Reset">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </form>
                                <div role="tabpanel" class="tab-pane" id="subscription">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <h4>Subscription</h4>
                                            </div>
                                            <!-- <form action="#" class="form-horizontal"> -->
                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="fb-name">Facebook</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-facebook text-primary"></i>
                                                            </span>
                                                            <input type="text" placeholder=" " name="facebook" id="fb-name" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="instagram">Instagram</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-fw fa-twitter text-primary"></i>
                                                            </span>
                                                            <input type="text" placeholder=" " name="instagram" id="twitter" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-2 col-md-9">
                                                        <input type="submit" class="btn btn-primary" value="Update">
                                                        &nbsp;
                                                        <input type="button" class="btn btn-danger" value="Cancel">
                                                        &nbsp;
                                                        <input type="reset" class="btn btn-default" value="Reset">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="workout">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <h4>Workout</h4>
                                            </div>
                                            <form action="{{ route('addUserWorkout') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ $userDetail->id }}">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label" for="exercise_name">Exercise Name:</label>
                                                        <div class="col-lg-6">
                                                            <div class="input-group">
                                                                <input type="text" name="exercise_name" id="exercise_name" required class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label" for="sets">Sets:</label>
                                                        <div class="col-lg-6">
                                                            <div class="input-group">

                                                                <input type="number" name="sets" id="sets" min="1" required class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label" for="reps">Reps:</label>
                                                        <div class="col-lg-6">
                                                            <div class="input-group">

                                                                <input type="number" name="reps" id="reps" min="1" required class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label" for="weight">Weight
                                                            (kg):</label>
                                                        <div class="col-lg-6">
                                                            <div class="input-group">

                                                                <input type="number" name="weight" id="weight" min="0" step="any" required class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label" for="notes">Notes:</label>
                                                        <div class="col-lg-6">
                                                            <div class="input-group">

                                                                <textarea name="notes" id="notes" rows="3" class="form-control"></textarea>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-2 col-md-9">
                                                            <input type="submit" class="btn btn-primary" value="Update"> &nbsp;
                                                            <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                            <input type="reset" class="btn btn-default" value="Reset">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Basic charts strats here-->
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        User Workout
                                                    </h4>
                                                </div>
                                                <div class="panel-body table-responsive">
                                                    <table class="table table-bordered" id="fitness-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Exercise Name</th>
                                                                <th>Sets</th>
                                                                <th>Reps</th>
                                                                <th>Weight</th>
                                                                <th>Notes</th>
                                                                <th>Edit/Save</th>
                                                                <th>Delete/Cancel</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($workouts as $workout)
                                                            <tr data-workout-id="{{ $workout->id }}">
                                                                <td>{{ $workout->exercise_name }}</td>
                                                                <td>{{ $workout->sets }}</td>
                                                                <td>{{ $workout->reps }}</td>
                                                                <td>{{ $workout->weight }}</td>
                                                                <td>{{ $workout->notes }}</td>

                                                                <td>
                                                                    <a class="edit btn btn-primary mar-bm" href="javascript:;">
                                                                        <i class="fa fa-fw fa-edit"></i> Edit
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Delete
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="diet">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <h4>Diet Plan</h4>
                                            </div>
                                            <form id="dietForm" action="{{ route('addUserDiet') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="user_id" value="{{ $userDetail->id }}">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="meal_name">Meal Name:</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="meal_name" id="meal_name" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="calories">Calories:</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="calories" id="calories" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="protein">Protein (g):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="protein" id="protein" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="carbs">Carbohydrates (g):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="carbs" id="carbs" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="fats">Fats (g):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="fats" id="fats" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="notes">Notes:</label>
                                                    <div class="col-lg-6">
                                                        <textarea name="notes" id="dietNotes" rows="3" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-2 col-md-9">
                                                            <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                                            <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                            <input type="reset" class="btn btn-default" value="Reset">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Basic charts strats here-->
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        User Diet Plan
                                                    </h4>
                                                </div>
                                                <div class="panel-body table-responsive">
                                                    <table class="table table-bordered" id="fitness-table">
                                                        <thead>
                                                            <tr>
                                                                <th>Meal Name</th>
                                                                <th>Calories</th>
                                                                <th>Protein</th>
                                                                <th>Carbs</th>
                                                                <th>Fats</th>
                                                                <th>Notes</th>
                                                                <th>Edit/Save</th>
                                                                <th>Delete/Cancel</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($diets as $diet)
                                                            <tr data-diet-id="{{ $diet->id }}">
                                                                <td>{{ $diet->meal_name }}</td>
                                                                <td>{{ $diet->calories }}</td>
                                                                <td>{{ $diet->protein }}</td>
                                                                <td>{{ $diet->carbs }}</td>
                                                                <td>{{ $diet->fats }}</td>
                                                                <td>{{ $diet->notes }}</td>

                                                                <td>
                                                                    <a class="edit1 btn btn-primary mar-bm" href="javascript:;">
                                                                        <i class="fa fa-fw fa-edit"></i> Edit
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Delete
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bmi">
                                    <div class="row">
                                        <div>
                                            <h4>Body Measurement </h4>
                                        </div>
                                        <form id="bmiForm" action="{{ route('addUserBodyMeasurement') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                            @csrf

                                            <div class="col-lg-4">
                                                <input type="hidden" name="user_id" value="{{ $userDetail->id }}">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="chest">Chest
                                                        (cm):</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="chest" id="chest" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="triceps">Triceps
                                                        (cm):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="triceps" id="triceps" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="biceps">Biceps
                                                        (cm)::</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="biceps" id="biceps" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="lats">Lats
                                                        (cm):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="lats" id="lats" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="shoulder">Shoulder
                                                        (cm):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="shoulder" id="shoulder" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="abs">Abs
                                                        (cm):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="abs" id="abs" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <img src="assets/img/bmi_images/female-skeleton.png" alt="skeleton" height="500">
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="forearms">Forearms
                                                        (cm):</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="forearms" id="forearms" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="traps">Traps
                                                        (cm):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="traps" id="traps" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="glutes">Glutes
                                                        (cm)::</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="glutes" id="glutes" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="quads">Quads
                                                        (cm):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="quads" id="quads" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="hamstring">Hamstring
                                                        (cm):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="hamstring" id="hamstring" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label" for="calves">Calves
                                                        (cm):</label>
                                                    <div class="col-lg-6">
                                                        <input type="number" name="calves" id="calves" min="0" required class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <h4>BMI</h4>
                                        </div>
                                        <div class="row">
                                            <label class="col-lg-2 control-label" for="height">Height
                                                (cm):</label>
                                            <div class="col-lg-6">
                                                <input type="number" name="height" id="height" min="0" required class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-2 control-label" for="bmi_weight">Weight
                                            (kg):</label>
                                        <div class="col-lg-6">
                                            <input type="number" name="weight" id="bmi_weight" min="0" required class="form-control">
                                            <input type="hidden" name="bmi" id="calculatedBmi" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-2 control-label" for="age">Age:</label>
                                        <div class="col-lg-6">
                                            <input type="number" name="age" id="age" min="0" required class="form-control">
                                        </div>
                                    </div>
                                    <span>
                                        <p id="result"></p>
                                    </span>

                                    <div class="row">
                                        <div class="col-md-offset-2 col-md-9">
                                            <input type="submit" class="btn btn-primary" id="addBmiButton" value="Add">
                                            <input type="button" class="btn btn-danger" id="cancelBmiButton" value="Cancel">
                                            <input type="button" class="btn btn-primary" value="calculate BMI" onclick="calculateBMI()" id="calculateBmi">

                                            <input type="reset" class="btn btn-default" value="Reset">
                                        </div>
                                    </div>
                                    </form>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- Basic charts strats here-->
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        BMI List
                                                    </h4>
                                                </div>
                                                <div class="panel-body table-responsive">
                                                    <table class="table table-bordered" id="fitness-table">
                                                        <thead>
                                                            <tr>
                                                                <th>id</th>
                                                                <th>Height</th>
                                                                <th>Weight</th>
                                                                <th>Age</th>
                                                                <th>Bmi</th>
                                                                <th>Edit/View</th>
                                                                <th>Delete</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($bmis as $bmi)
                                                            <tr>
                                                                <td>{{ $bmi->user_id }}</td>
                                                                <td>{{ $bmi->height }}</td>
                                                                <td>{{ $bmi->weight }}</td>
                                                                <td>{{ $bmi->age }}</td>
                                                                <td>{{ $bmi->bmi }}</td>

                                                                <td>
                                                                    <a class="bmiEdit btn btn-primary mar-bm">
                                                                        <i class="fa fa-fw fa-edit"></i> Edit
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a class="delete btn btn-danger mar-bm" href="javascript:;">
                                                                        <i class="fa fa-trash-o"></i> Delete
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="trainer">
                                    <div class="row">
                                        <div>
                                            <h4>Gym Trainer </h4>
                                        </div>
                                        <form id="trainerForm" action="{{ route('allotTrainer') }}" method="POST" class="form-horizontal">
                                            @csrf
                                            <label for="trainer">Select a Trainer:</label>
                                            <select id="trainer" name="trainer_id">
                                                <option value="0">none</option>
                                                @foreach ($trainers as $trainer )
                                                <option value={{$trainer->id}} {{ $trainer->id == $userDetail->trainer_id ? 'selected' : '' }}>{{$trainer->name}}</option>
                                                @endforeach
                                            </select>
                                            <br><br>
                                            <input type="hidden" name="user_id" value={{$userDetail->id}}>
                                            <input type="submit" class="btn btn-primary" value="Allot Trainer">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            hideBmiUpdateButton();

            // Edit button click event to update the user workout
            $('.edit').on('click', function() {
                var row = $(this).closest('tr'); // Get the parent row
                var workoutId = row.data('workout-id'); // Get the workout ID
                var exerciseName = row.find('td:eq(0)').text(); // Get exercise name
                var sets = row.find('td:eq(1)').text(); // Get sets
                var reps = row.find('td:eq(2)').text(); // Get reps
                var weight = row.find('td:eq(3)').text(); // Get weight
                var notes = row.find('td:eq(4)').text(); // Get notes

                // Populate form fields with the data
                $('#exercise_name').val(exerciseName);
                $('#sets').val(sets);
                $('#reps').val(reps);
                $('#weight').val(weight);
                $('#notes').val(notes);

                // Update form action and add workout ID as a hidden input
                $('form').attr('action', '{{ route("updateUserWorkout") }}');
                $('<input>').attr({
                    type: 'hidden',
                    name: 'workout_id',
                    value: workoutId
                }).appendTo('form');

                // Change submit button value to "Update"
                $('input[type="submit"]').val('Update');
            });

            // Cancel button click event
            $('.btn-danger').on('click', function() {
                // Reset form fields
                $('form')[0].reset();
                // Change form action back to add
                $('form').attr('action', '{{ route("addUserWorkout") }}');
                // Remove workout_id input
                $('input[name="workout_id"]').remove();
                // Change submit button value to "Add"
                $('input[type="submit"]').val('Add');
            });

            // Edit button click event to update the user diet
            $('.edit1').on('click', function() {
                var row = $(this).closest('tr');
                var dietId = row.data('diet-id');
                var mealName = row.find('td:eq(0)').text();
                var calories = row.find('td:eq(1)').text();
                var protein = row.find('td:eq(2)').text();
                var carbs = row.find('td:eq(3)').text();
                var fats = row.find('td:eq(4)').text();
                var dietNotes = row.find('td:eq(5)').text();

                $('#meal_name').val(mealName);
                $('#calories').val(calories);
                $('#protein').val(protein);
                $('#carbs').val(carbs);
                $('#fats').val(fats);
                $('#dietNotes').val(dietNotes);

                $('#dietForm').attr('action', '{{ route("updateUserDiet") }}');

                $('<input>').attr({
                    type: 'hidden',
                    name: 'diet_id',
                    value: dietId
                }).appendTo('#dietForm');

                // Change submit button value to "Update"
                $('input[type="submit"]').val('Update');
            });

            // Cancel button click event
            $('.btn-danger').on('click', function() {
                // Reset form fields
                $('#dietForm')[0].reset();
                // Change form action back to add
                $('#dietForm').attr('action', '{{ route("addUserDiet") }}');
                // Remove diet-id input
                $('input[name="diet_id"]').remove();
                // Change submit button value to "Add"
                $('input[type="submit"]').val('Add');
            });

            $('.bmiEdit').on('click', function() {
                var row = $(this).closest('tr');
                var height = row.find('td:eq(1)').text();
                var weight = row.find('td:eq(2)').text();
                var age = row.find('td:eq(3)').text();
            

                $('#height').val(height);
                $('#bmi_weight').val(weight);
                $('#age').val(age);
                
                $('#bmiForm').attr();
    
                // Change submit button value to "Update"
                $('input[type="submit"]').val('Update');
            });
        });

        function calculateBMI() {
            var age = parseFloat(document.getElementById("age").value);
            var height = parseFloat(document.getElementById("height").value) / 100;
            var bmi_weight = parseFloat(document.getElementById("bmi_weight").value);

            if (isNaN(age) || isNaN(height) || isNaN(bmi_weight)) {
                alert("Please enter valid numbers for age, height, and weight.");
                return;
            }

            var bmi = bmi_weight / (height * height);
            document.getElementById("result").innerHTML = "Your BMI is: " + bmi.toFixed(2);

            document.getElementById('addBmiButton').style.visibility = 'visible';
            document.getElementById('cancelBmiButton').style.visibility = 'visible';
            document.getElementById('calculateBmi').remove();

            // Set the calculated BMI value to the hidden input field
            document.getElementById("calculatedBmi").value = bmi.toFixed(2);
        }

        function hideBmiUpdateButton() {
            document.getElementById('addBmiButton').style.visibility = 'hidden';
            document.getElementById('cancelBmiButton').style.visibility = 'hidden';
        }
    </script>
</aside>
@endsection