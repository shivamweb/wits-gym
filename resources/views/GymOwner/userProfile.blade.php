@extends('GymOwner.master')
@section('title', 'Gym Profile')
@section('content')

    <aside class="right-side right-padding">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h2 class="section_h2_margin_top">Gym Profile</h2>
            <ol class="breadcrumb">
                <li>
                    <a href='index.html'>
                        <i class="fa fa-fw fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a>Gym Profile</a>
                </li>
            </ol>
        </section>
        <!--section ends-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h5 class="panel-title">Gym Profile</h5>
                        </div>
                        <div class="panel-body">
                            <div role="tabpanel">
                                <!-- Nav tabs -->
                                <div class="terms">
                                    <ul class="nav nav-tabs nav-custom " role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#Info" aria-controls="Info" role="tab" data-toggle="tab">
                                                <strong>Gym Info</strong>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#terms" aria-controls="terms" role="tab" data-toggle="tab">
                                                <strong>Terms & Conditions</strong>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#social" aria-controls="social" role="tab" data-toggle="tab">
                                                <strong>Social Networks</strong>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <form action="{{ route('updateGym') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf

                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="Info">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-4 text-center">
                                                    <div class="form-group pad-top">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail">
                                                                <img data-src="holder.js/200x150" src="{{ $gymDetail->image }}" alt="profile">
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
                                                                    <td>Username</td>
                                                                    <td>
                                                                        <input type="text" value="{{ $gymDetail->username }}" placeholder="enter user name" id="fb-name" name="username" class="form-control">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>E-mail</td>
                                                                    <td>
                                                                        <input type="text" value="{{ $gymDetail->email }}"  placeholder="enter email" id="fb-name" name="email" class="form-control">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Password</td>
                                                                    <td>
                                                                        <input type="text"  value="{{ $gymDetail->password }}" placeholder="enter email" id="fb-name" name="password" class="form-control">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gym name</td>
                                                                    <td>
                                                                        <input type="text"  value="{{ $gymDetail->gym_name }}"  placeholder="enter gym name" id="fb-name" name="gym_name" class="form-control">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>City</td>
                                                                    <td>
                                                                        <input type="text"   value="{{ $gymDetail->city }}"  placeholder="enter city name" id="fb-name" name="city" class="form-control">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>State</td>
                                                                    <td>
                                                                        <input type="text"  value="{{ $gymDetail->state }}"  placeholder="enter state name" id="fb-name" name="state" class="form-control">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Country</td>
                                                                    <td>
                                                                        <input type="text" value="{{ $gymDetail->country }}"  placeholder="enter country name" id="fb-name" name="country" class="form-control">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Website</td>
                                                                    <td>
                                                                        <input type="text"  value="{{ $gymDetail->web_link }}"  placeholder="enter website link" id="fb-name" name="web_link" class="form-control">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Gym Type</td>
                                                                    <td>
                                                                        <input type="text" value="{{ $gymDetail->gym_type }}"  placeholder="enter gym type" id="fb-name" name="gym_type" class="form-control">
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address</td>
                                                                    <td>
                                                                        <textarea class="summernote edi-css" name="address" placeholder="Place some text here"> {{ $gymDetail->address }} </textarea>
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
                                        <div role="tabpanel" class="tab-pane" id="terms">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div>
                                                        <h4>Terms and Conditions</h4>
                                                    </div>
                                                    <!-- <form> -->
                                                    <textarea class="summernote edi-css" placeholder="Place some text here" name="terms_and_conditions">{{ $gymDetail->terms_and_conditions }}</textarea>
                                                    <div class="form-actions pad-top">
                                                        <div class="">
                                                             <input type="submit" class="btn btn-primary" value="Update"> &nbsp;
                                                             <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                                            <input type="reset" class="btn btn-default reset-editable" value="Reset">
                                                        </div>
                                                    </div>
                                                    <!-- </form> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="social">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div>
                                                        <h4>Social Networks</h4>
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
                                                                    <input type="text" value="{{ $gymDetail->facebook }}" placeholder=" " name="facebook" id="fb-name" class="form-control">
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
                                                                    <input type="text" value="{{ $gymDetail->instagram }}" placeholder=" " name="instagram" id="twitter" class="form-control">
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
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
@endsection
