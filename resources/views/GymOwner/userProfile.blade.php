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
                            <form action="{{ route('updateGym') }}" method="POST" class="form-horizontal"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="Info">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-4 text-center">
                                                <div class="form-group pad-top">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail">
                                                            <img data-src="holder.js/200x150" src="{{ $gymDetail->image }}"
                                                                alt="profile">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                        <div class="select_align">
                                                            <span class="btn btn-primary btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="image">
                                                            </span>
                                                            <a href="#" class="btn btn-primary fileinput-exists"
                                                                data-dismiss="fileinput">Remove</a>
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
                                                                    <input type="text" placeholder="enter user name"
                                                                        required id="fb-name" name="username"
                                                                        value="{{ $gymDetail->username }}"
                                                                        class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>E-mail</td>
                                                                <td>
                                                                    <input type="text" placeholder="enter email" required
                                                                        id="fb-name" name="email"
                                                                        value="{{ $gymDetail->email }}"
                                                                        class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Password</td>
                                                                <td>
                                                                    <input type="text" placeholder="enter email" required
                                                                        id="fb-name" name="password"
                                                                        value="{{ $gymDetail->password }}"
                                                                        class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gym name</td>
                                                                <td>
                                                                    <input type="text" placeholder="enter gym name"
                                                                        required id="fb-name" name="gym_name"
                                                                        value="{{ $gymDetail->gym_name }}"
                                                                        class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Address</td>
                                                                <td>
                                                                    <textarea class="summernote edi-css" name="address" required placeholder="Place some text here">{{ $gymDetail->address }}</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>City</td>
                                                                <td>
                                                                    <input type="text" placeholder="enter city name"
                                                                        required value="{{ $gymDetail->city }}"
                                                                        id="fb-name" name="city" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>State</td>
                                                                <td>
                                                                    <input type="text" placeholder="enter state name"
                                                                        required value="{{ $gymDetail->state }}"
                                                                        id="fb-name" name="state" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Country</td>
                                                                <td>
                                                                    <input type="text" placeholder="enter country name"
                                                                        required value="{{ $gymDetail->country }}"
                                                                        id="fb-name" name="country" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Website</td>
                                                                <td>
                                                                    <input type="text" placeholder="enter website link"
                                                                        required value="{{ $gymDetail->web_link }}"
                                                                        id="fb-name" name="web_link" class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Gym Type</td>
                                                                <td>
                                                                    <input type="text" placeholder="enter gym type"
                                                                        required value="{{ $gymDetail->gym_type }}"
                                                                        id="fb-name" name="gym_type"
                                                                        class="form-control">
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    <div class="form-body">
                                                                        <div class="form-group">
                                                                            <label class="col-lg-2 control-label"
                                                                                for="fb-name">Facebook</label>

                                                                        </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" placeholder=" " name="facebook"
                                                                        value="{{ $gymDetail->facebook }}" id="fb-name"
                                                                        class="form-control">

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-2 control-label"
                                                                            for="twitter">Instagram</label>

                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <input type="text" placeholder=" "
                                                                        value="{{ $gymDetail->instagram }}"
                                                                        name="instagram" id="twitter"
                                                                        class="form-control">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-group">
                                                                        <label class="col-lg-2 control-label"
                                                                            for="terms_and_conditions">Terms and
                                                                            Conditions</label>

                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <textarea class="summernote edi-css" id="terms_and_conditions" placeholder="Enter Your terms & Conditions here"
                                                                        name="terms_and_conditions">{{ $gymDetail->terms_and_conditions }}</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <div class="form-actions">
                                                                        <div class="row">
                                                                            <div class="col-md-offset-3 col-md-7">
                                                                                <input type="submit"
                                                                                    class="btn btn-primary"
                                                                                    value="Update">
                                                                                <a class='btn btn-danger'
                                                                                    href='/dashboard'> Cancel</a>
                                                                                <input type="reset"
                                                                                    id="add-news-reset-editable"
                                                                                    class="btn btn-default reset-styles"
                                                                                    value="Reset">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                    </div>

                                                    </table>
                                                </div>
                                            </div>
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


                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
                <div class="col-sm-12 col-md-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-custom">
                        <li class="active">
                            <a href="#tab-activity" data-toggle="tab" class="text-primary">
                                <strong>Activities</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#followers" data-toggle="tab" class="text-primary">
                                <strong>Followers</strong>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-events" data-toggle="tab" class="text-primary">
                                <strong>My Events</strong>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content nopadding noborder">
                        <div id="tab-activity" class="tab-pane fade in active">
                            <div class="activity">
                                <div class="imgs-profile">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img class="img-responsive" src="assets/img/gallery/17.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <h5 class="text-primary">Nutrition</h5>
                                            <br>
                                            <small class="text-muted"></small>
                                            <p>
                                                Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                                ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor
                                                sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                                labore et dolore magna aliqua.
                                                <a href="#">Readmore</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- media -->
                                <div class="imgs-profile">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img class="img-responsive" src="assets/img/gallery/16.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <h5 class="text-primary">Workout</h5>
                                            <br>
                                            <small class="text-muted">Today at 11:15pm</small>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                <a href="#">Readmore</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- media-body -->
                                </div>
                                <!-- media -->
                                <div class="imgs-profile">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="#">
                                                <img class="img-responsive" src="assets/img/gallery/6.jpg"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="col-md-9">
                                            <h5 class="text-primary">Yoga</h5>
                                            <br>
                                            <small class="text-muted">Today at 1:18pm</small>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat.
                                                <a href="#">Readmore</a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- media-body -->
                                </div>
                                <!-- media -->
                            </div>
                        </div>
                        <!-- tab-pane -->
                        <div class="tab-pane" id="followers">
                            <div class="follower-list">
                                <div class="media followers_align">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" data-src="holder.js/100x100" src="#"
                                            alt="image not found" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="follower-name">Nullam Vitae</h4>
                                        <br>
                                        <div>
                                            <i class="fa fa-map-marker"></i> Alberta, Edmonton, Canada
                                        </div>
                                        <br>
                                        <div>
                                            <i class="fa fa-briefcase"></i> Switchboard operator at
                                            <a href="#">SomeCompany, Inc.</a>
                                        </div>
                                        <div class="mb20"></div>
                                        <div class="btn-toolbar">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-envelope-o"></i> Send Message
                                                </button>
                                            </div>
                                            <!-- btn-group -->
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-check"></i> Following
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-check"></i> Followers
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media followers_align">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" data-src="holder.js/100x100" src="#"
                                            alt="image not found" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="follower-name">Nibh Un Odiosters</h4>
                                        <br>
                                        <div>
                                            <i class="fa fa-map-marker"></i> Cebu City, Philippines
                                        </div>
                                        <br>
                                        <div>
                                            <i class="fa fa-briefcase"></i> Switchboard operator
                                            <a href="#">ITCompany, Inc.</a>
                                        </div>
                                        <div class="mb20"></div>
                                        <div class="btn-toolbar">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-envelope-o"></i> Send Message
                                                </button>
                                            </div>
                                            <!-- btn-group -->
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-check"></i> Following
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-check"></i> Followers
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media followers_align">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" data-src="holder.js/100x100" src="#"
                                            alt="image not found" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="follower-name">Vitae Nibh</h4>
                                        <br>
                                        <div class="profile-location">
                                            <i class="fa fa-map-marker"></i> Madrid, Spain
                                        </div>
                                        <br>
                                        <div class="profile-position">
                                            <i class="fa fa-briefcase"></i> CEO at
                                            <a href="#">SomeCompany, Inc.</a>
                                        </div>
                                        <div class="mb20"></div>
                                        <div class="btn-toolbar">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-envelope-o"></i> Send Message
                                                </button>
                                            </div>
                                            <!-- btn-group -->
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-check"></i> Following
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-check"></i> Followers
                                                </button>
                                            </div>
                                            <div class="mb20"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media followers_align">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" data-src="holder.js/100x100" src="#"
                                            alt="image not found" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="follower-name">Odiosters</h4>
                                        <br>
                                        <div>
                                            <i class="fa fa-map-marker"></i> Bangkok, Thailand
                                        </div>
                                        <br>
                                        <div>
                                            <i class="fa fa-briefcase"></i> Java Developer at
                                            <a href="#">ITCompany, Inc.</a>
                                        </div>
                                        <div class="mb20"></div>
                                        <div class="btn-toolbar">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-envelope-o"></i> Send Message
                                                </button>
                                            </div>
                                            <!-- btn-group -->
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-check"></i> Following
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-check"></i> Followers
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media followers_align">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" data-src="holder.js/100x100" src="#"
                                            alt="image not found" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="follower-name">Odiosters Nullam Vitae</h4>
                                        <br>
                                        <div class="profile-location">
                                            <i class="fa fa-map-marker"></i> Tokyo, Japan
                                        </div>
                                        <br>
                                        <div class="profile-position">
                                            <i class="fa fa-briefcase"></i> QA Engineer at
                                            <a href="#">SomeCompany, Inc.</a>
                                        </div>
                                        <div class="mb20"></div>
                                        <div class="btn-toolbar">
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-envelope-o"></i> Send Message
                                                </button>
                                            </div>
                                            <!-- btn-group -->
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-check"></i> Following
                                                </button>
                                            </div>
                                            <div class="btn-group">
                                                <button class="btn btn-success btn-xs floower_btn_align">
                                                    <i class="fa fa-check"></i> Followers
                                                </button>
                                            </div>
                                        </div>
                                        <div class="mb20"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-events">
                            <div class="events">
                                <h4 class="lg-title mb20">Upcoming Events</h4>
                                <div class="row">
                                    <div class="col-sm-6 mb20">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumbnail" data-src="holder.js/100x100"
                                                    src="#" alt="image not found" />
                                            </a>
                                            <div class="media-body">
                                                <h5 class="event-title">
                                                    <a href="#" class="text-primary">Lorem Ipsum is simply dummy</a>
                                                </h5>
                                                <br>
                                                <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    18 / 10 / 2015 - 20 / 10 / 2015
                                                </small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor...
                                                </p>
                                            </div>
                                        </div>
                                        <!-- media -->
                                    </div>
                                    <!-- col-sm-6 -->
                                    <div class="col-sm-6 events_align mb20">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumbnail" data-src="holder.js/100x100"
                                                    src="#" alt="image not found" />
                                            </a>
                                            <div class="media-body">
                                                <h5 class="event-title">
                                                    <a href="#" class="text-primary">Lorem ipsum dolor text</a>
                                                </h5>
                                                <br>
                                                <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    25 / 10 / 2015 - 27 / 10 / 2015
                                                </small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor...
                                                </p>
                                            </div>
                                        </div>
                                        <!-- media -->
                                    </div>
                                    <div class="col-sm-6 events_align mb20">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumbnail" data-src="holder.js/100x100"
                                                    src="#" alt="image not found" />
                                            </a>
                                            <div class="media-body">
                                                <h5 class="event-title">
                                                    <a href="#" class="text-primary">Lorem Ipsum is not simply
                                                        random
                                                        text</a>
                                                </h5>
                                                <br>
                                                <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    05 / 11 / 2015 - 07 / 11 / 2015
                                                </small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor...
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 events_align mb20">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumbnail" data-src="holder.js/100x100"
                                                    src="#" alt="image not found" />
                                            </a>
                                            <div class="media-body">
                                                <h5 class="event-title">
                                                    <a href="#" class="text-primary">The standard chunk of Lorem
                                                        Ipsum</a>
                                                </h5>
                                                <br>
                                                <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    19 / 11 / 2015 - 21 / 11 / 2015
                                                </small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor...
                                                </p>
                                            </div>
                                        </div>
                                        <!-- media -->
                                    </div>
                                    <!-- col-sm-6 -->
                                </div>
                                <!-- row -->
                                <br />
                                <h4 class="lg-title mb20">Past Events</h4>
                                <div class="row">
                                    <div class="col-sm-6 events_align mb20">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumbnail" data-src="holder.js/100x100"
                                                    src="#" alt="image not found" />
                                            </a>
                                            <div class="media-body">
                                                <h5 class="event-title">
                                                    <a href="#" class="text-primary">One week Yoga Special
                                                        Traing</a>
                                                </h5>
                                                <br>
                                                <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    16 / 09 / 2015 - 21 / 09 / 2015
                                                </small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor...
                                                </p>
                                            </div>
                                        </div>
                                        <!-- media -->
                                    </div>
                                    <!-- col-sm-6 -->
                                    <div class="col-sm-6 events_align mb20">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumbnail" data-src="holder.js/100x100"
                                                    src="#" alt="image not found" />
                                            </a>
                                            <div class="media-body">
                                                <h5 class="event-title">
                                                    <a href="#" class="text-primary">Personal Training Happy
                                                        Week</a>
                                                </h5>
                                                <br>
                                                <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    03 / 09 / 2015 - 09 / 09 / 2015
                                                </small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor...
                                                </p>
                                            </div>
                                        </div>
                                        <!-- media -->
                                    </div>
                                    <!-- col-sm-6 -->
                                    <div class="col-sm-6 events_align mb20">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumbnail" data-src="holder.js/100x100"
                                                    src="#" alt="image not found" />
                                            </a>
                                            <div class="media-body">
                                                <h5 class="event-title">
                                                    <a href="#" class="text-primary">5K Marthon</a>
                                                </h5>
                                                <br>
                                                <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    25 / 08 / 2015
                                                </small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor...
                                                </p>
                                            </div>
                                        </div>
                                        <!-- media -->
                                    </div>
                                    <!-- col-sm-6 -->
                                    <div class="col-sm-6 events_align mb20">
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object thumbnail" data-src="holder.js/100x100"
                                                    src="#" alt="image not found" />
                                            </a>
                                            <div class="media-body">
                                                <h5 class="event-title">
                                                    <a href="#" class="text-primary">Soul Searching</a>
                                                </h5>
                                                <br>
                                                <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    18 / 08 / 2015 - 20 / 08 / 2015
                                                </small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor...
                                                </p>
                                            </div>
                                        </div>
                                        <!-- media -->
                                    </div>
                                    <!-- col-sm-6 -->
                                </div>
                                <!-- row -->
                            </div>
                            <!-- events -->
                        </div>
                        <!-- tab-pane -->
                    </div>
                    <!-- tab-content -->
                </div>
                <!-- col-sm-9 -->
            </div> --}}
        </div>
        <!-- /.content -->
    </aside>
@endsection
