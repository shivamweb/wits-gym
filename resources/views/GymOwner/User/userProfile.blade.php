@extends('GymOwner.master')
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
                                    {{-- <li role="presentation">
                                            <a href="#terms" aria-controls="terms" role="tab" data-toggle="tab">
                                                <strong>Terms & Conditions</strong>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#social" aria-controls="social" role="tab" data-toggle="tab">
                                                <strong>Social Networks</strong>
                                            </a>
                                        </li> --}}
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
                                                            <img src="{{$userDetail->image}}" alt="profile">
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
                                                                    <input type="text" value="{{$userDetail->first_name}}" required placeholder="enter first name" id="first_name" name="first_name" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Last Name</td>
                                                                <td>
                                                                    <input type="text" value="{{$userDetail->last_name}}" required placeholder="enter last name" id="last_name" name="last_name" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Username</td>
                                                                <td>
                                                                    <input type="text" value="{{$userDetail->username}}" required placeholder="enter username" id="fb-name" name="username" class="form-control">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>E-mail</td>
                                                                <td>
                                                                    <input type="text" value="{{$userDetail->email}}" required placeholder="enter email" id="fb-name" name="email" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gender</td>
                                                                <td>
                                                                    <input type="text" value="{{$userDetail->gender}}" required placeholder="enter user Gender" id="fb-name" name="gender" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone no</td>
                                                                <td>
                                                                    <input type="text" value="{{$userDetail->phone_no}}" required placeholder="enter phone number" id="fb-name" name="phone_no" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Password</td>
                                                                <td>
                                                                    <input type="text" value="{{$userDetail->password}}" required placeholder="enter password" id="fb-name" name="password" class="form-control">
                                                                    <input type="hidden" name="uuid" id="uuid" value="{{$userDetail->uuid}}">
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
                                <!-- <div role="tabpanel" class="tab-pane" id="terms">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <h4>Terms and Conditions</h4>
                                            </div> -->
                                <!-- <form> -->
                                <!-- <textarea class="summernote edi-css" placeholder="Place some text here" name="terms_and_conditions"></textarea>
                                            <div class="form-actions pad-top">
                                                <div class="">
                                                    <input type="submit" class="btn btn-primary" value="Update"> &nbsp;
                                                    <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                    <input type="reset" class="btn btn-default reset-editable" value="Reset">
                                                </div>
                                            </div> -->
                                <!-- </form> -->
                                <!-- </div>
                                    </div>
                                </div> -->
                                <!-- <div role="tabpanel" class="tab-pane" id="social">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <h4>Social Networks</h4>
                                            </div> -->
                                <!-- <form action="#" class="form-horizontal"> -->
                                <!-- <div class="form-body">
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
                                                        <input type="submit" class="btn btn-primary" value="Update"> &nbsp;
                                                        <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                        <input type="reset" class="btn btn-default" value="Reset">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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
                                                        <input type="submit" class="btn btn-primary" value="Update"> &nbsp;
                                                        <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
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
                                                        <label class="col-lg-2 control-label" for="weight">Weight (kg):</label>
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
                                                                <th>exercise_name</th>
                                                                <th>sets</th>
                                                                <th>reps</th>
                                                                <th>weight</th>
                                                                <th>notes</th>
                                                                <th>Edit/Save</th>
                                                                <th>Delete/Cancel</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($workouts as $workout)
                                                            <tr>
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
                                            <form action="{{ route('addUserDiet') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
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
                                                        <textarea name="notes" id="notes" rows="3" class="form-control"></textarea>
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
                                                            <tr>
                                                                <td>{{ $diet->meal_name }}</td>
                                                                <td>{{ $diet->calories }}</td>
                                                                <td>{{ $diet->protein }}</td>
                                                                <td>{{ $diet->carbs }}</td>
                                                                <td>{{ $diet->fats }}</td>
                                                                <td>{{ $diet->notes }}</td>

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</aside>
@endsection