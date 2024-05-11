<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:47:22 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>@yield('title', 'GYM Info')</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <script src="../../../../assets/oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../../../../assets/oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <!--[endif]-->
    <!-- global css -->
    <link type="text/css" href="../../../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="../../../../assets/css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="../../../../assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/vendors/x-editable/css/bootstrap-editable.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="../../../../assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/custom_css/club_info.css" rel="stylesheet" />
    <!--end of page level css-->

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-static-top">
            <a class='logo' href='index.html'>
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="../../../../assets/img/logo.png" alt="image not found">
            </a>
            <!-- Header Navbar: style can be found in header-->
            <!-- Sidebar toggle button-->
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-navicon"></i>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw fa-envelope-o black"></i>
                            <span class="label label-success">5</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages table-striped">
                            <li class="dropdown-title">New Messages</li>
                            <li>
                                <a href="#" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="../../../../assets/img/authors/avatar7.jpg">
                                    <div class="message-body"> <strong>Ernest Kerry</strong>
                                        <br> Can we Meet?
                                        <br>
                                        <small>Just Now</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    <img class="message-image img-circle" alt="image" src="../../../../assets/img/authors/avatar.jpg">
                                    <div class="message-body"> <strong>John</strong>
                                        <br> Dont forgot to call...
                                        <br>
                                        <small>5 minutes ago</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="../../../../assets/img/authors/avatar5.jpg">
                                    <div class="message-body">
                                        <strong>Wilton Zeph</strong>
                                        <br> If there is anything else &hellip;
                                        <br>
                                        <small>14/10/2014 1:31 pm</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    <img class="message-image img-circle" alt="image" src="../../../../assets/img/authors/avatar1.jpg">
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br> Let me know when you free
                                        <br>
                                        <small>5 days ago</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="../../../../assets/img/authors/avatar.jpg">
                                    <div class="message-body">
                                        <strong>Tony</strong>
                                        <br> Let me know when you free
                                        <br>
                                        <small>5 days ago</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All messages</li>
                        </ul>
                    </li>
                    <!--tasks-->
                    <li class="dropdown tasks-menu hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-fw fa-edit black"></i>
                            <span class="label label-primary">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="dropdown-title">You Have 4 Tasks</li>
                            <li>
                                <a href="#" class="message striped-col">
                                    Design some buttons
                                    <small class="pull-right">20%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-primary" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    Create a nice theme
                                    <small class="pull-right">40%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-success" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message striped-col">
                                    Some task I need to do
                                    <small class="pull-right">60%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    Make beautiful transitions
                                    <small class="pull-right">80%</small>
                                    <div class="message-body">
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-warning" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All Tasks</li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle toggle-right">
                            <i class="fa fa-fw fa-comments-o black1"></i>
                            <span class="label label-danger">0</span>
                        </a>
                    </li>
                    <!-- Notifications: style can be found in dropdown-->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-fw fa-bell-o black1"></i>
                            <span class="label label-warning">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="dropdown-title">You have 9 notifications</li>
                            <li>
                                <a href="#" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-users info"></i>
                                    <div class="message-body">
                                        <strong>John Doe</strong>
                                        <br> 5 members joined today
                                        <br>
                                        <span class="noti-date">Just now</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not">
                                    <i class="fa fa-fw fa-users warning"></i>
                                    <div class="message-body">
                                        <strong>Tony</strong>
                                        <br> likes a photo of you
                                        <br>
                                        <span class="noti-date">5 min</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-user danger"></i>
                                    <div class="message-body">
                                        <strong>John</strong>
                                        <br> Dont forgot to call...
                                        <br>
                                        <span class="noti-date">11 min</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not">
                                    <i class="fa fa-fw fa-info-circle dange"></i>
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br> Very long description here...
                                        <br>
                                        <span class="noti-date">1 Hour</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message icon-not striped-col">
                                    <i class="fa fa-fw fa-thumbs-o-up success"></i>
                                    <div class="message-body">
                                        <strong>Ernest Kerry</strong>
                                        <br> 2 members joined today
                                        <br>
                                        <span class="noti-date">3 Days</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer">View All Notifications</li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                            <img src="../../../../assets/img/authors/avatar1.jpg" width="35" class="img-circle img-responsive pull-left" height="35" alt="User Image">
                            <div class="riot">
                                <div>
                                    Natali
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="../../../../assets/img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                                <p>Nataliapery</p>
                            </li>
                            <!-- Menu Body -->
                            <li class="pad-3">
                                <a href="#">
                                    <i class="fa fa-fw fa-user"></i> My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw fa-gear"></i> Account Settings
                                </a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#">
                                        <i class="fa fa-fw fa-lock"></i> Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href='login.html'>
                                        <i class="fa fa-fw fa-sign-out"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar">
                <div id="menu" role="navigation">
                    <div class="nav_profile">
                        <div class="media profile-left">
                            <a class="pull-left profile-thumb" href="#">
                                <img src="../../../../assets/img/authors/avatar1.jpg" class="img-circle" alt="User Image">
                            </a>
                            <div class="content-profile">
                                <h4 class="media-heading">Nataliapery</h4>
                                <span class="text-default">Admin</span>
                            </div>
                        </div>
                    </div>
                    <ul class="navigation">
                        <li>
                            <a href='../admin/adminDashboard'>
                                <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                                <span class="mm-text ">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-picture-o"></i>
                                <span class="mm-text">GYM</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='../admin/viewGymInfo'>
                                        <i class="text-primary fa fa-fw fa-cloud-upload"></i> Gym Add
                                    </a>
                                </li>
                                <li>
                                    <a href='../admin/viewGymList'>
                                        <i class="text-success fa fa-fw fa-file-image-o"></i> Gym List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='/admin/viewAddAdminSubscription'>
                                <i class="text-primary menu-icon fa fa-th fa-info-circle"></i>
                                <span class="mm-text">Subscription</span>
                            </a>
                        </li>

                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-default menu-icon fa fa-fw fa-users"></i>
                                <span class="mm-text">Users</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='/admin/adminUserList'>
                                        <i class="text-primary fa fa-fw fa-users"></i> Users List
                                    </a>
                                </li>
                                <li>
                                    <a href='admin_userprofile.html'>
                                        <i class="text-success fa fa-fw fa-user"></i> User Profile
                                    </a>
                                </li>
                                <li>
                                    <a href='/admin/addAdminUsers'>
                                        <i class="text-info fa fa-fw fa-user"></i> Add Users
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='/admin/coupen'>
                                <i class="text-primary  menu-icon fa fa-scissors"></i>
                                <span class="mm-text">Coupons</span>
                            </a>
                        </li>
                        <li>
                            <a href='/admin/advertisement'>
                                <i class="text-primary  menu-icon fa fa-question-circle"></i>
                                <span class="mm-text">Advertisement</span>
                            </a>
                        </li>
                        <li>
                            <a href='/admin/userNotification'>
                                <i class="text-primary  menu-icon fa fa-question-circle"></i>
                                <span class="mm-text">User Notification</span>
                            </a>
                        </li>
                        <li>
                            <a href='/admin/payment'>
                                <i class="text-primary  menu-icon fa fa-question-circle"></i>
                                <span class="mm-text">Payment</span>
                            </a>
                        </li>
                        <li>
                            <a href='/admin/listEnquiry'>
                                <i class="text-primary  menu-icon fa fa-question-circle"></i>
                                <span class="mm-text">Enquiry</span>
                            </a>
                        </li>
                    <!-- / .navigation -->
                </div>
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

<aside class="right-side right-padding">
<section class="content-header">
    <!--section starts-->
    <h2>Add User</h2>
    <ol class="breadcrumb">
        <li>
            <a href='/dashboard '>
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a >Users</a>
        </li>
        <li>
            <a class='activated'>Add User</a>
        </li>
    </ol>
</section>
<!--section ends-->
<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-fw fa-user"></i> Add User
                    </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_users_form" action="{{route('addUserByadmin')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Image</label>
                                        <div class="col-md-7 text-center">
                                            <div class="input-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img data-src="holder.js/200x150" src="#" alt="profile">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                    <div class="select_align">
                                                        <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="image" required>
                                                        </span>
                                                        <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="usr_name">
                                            User Name
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-user-md text-primary"></i>
                                                </span>
                                                <input type="text" class="form-control" id="usr_name" placeholder="Enter Username" name="username" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="mail">
                                            First name
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </span>
                                                <input type="text" placeholder="Enter First Name" required class="form-control" id="mail" name="first_name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="mail">
                                            Last Name
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </span>
                                                <input type="text" placeholder="Enter Last Name" required class="form-control" id="mail" name="last_name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="mail">
                                            Email
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </span>
                                                <input type="email" placeholder=" Enter Email Address" required class="form-control" id="mail" name="email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="contact">
                                            Contact Number
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-phone text-primary"></i>
                                                </span>
                                                <input type="text"placeholder="Enter Contact number" required id="contact" class="form-control" name="phone_no" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 text-right">
                                            Gender
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <label>
                                                    <input class="radio_val" type="radio" name="gender" value="male" /> Male
                                                </label>
                                                <label class="pad-left">
                                                    <input class="radio_val" type="radio" name="gender" value="female" /> Female
                                                </label>
                                                <label class="pad-left">
                                                    <input class="radio_val" type="radio" name="gender" value="others" /> Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="mail">
                                            password
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </span>
                                                <input type="text" placeholder="Enter Password" required class="form-control" id="mail" name="password" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-md-3 control-label" for="addr">
                                            Address
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-plus text-primary"></i>

                                                </span>
                                                <input type="text" class="form-control" id="addr" placeholder="Address" name="address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="city">
                                            City
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-plus text-primary"></i>
                                                </span>
                                                <input type="text" class="form-control" id="city" placeholder="City" name="city">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="pin">
                                            Pin Code
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-plus text-primary"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Pin Code" id="pin" name="pincode">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label  col-md-3" for="select23">Country</label>
                                        <div class="col-md-7">
                                            <select id="select23" class="form-control js-states select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value>Select a country</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">
                                                        North Dakota
                                                    </option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">
                                                        Mississippi
                                                    </option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">
                                                        South Dakota
                                                    </option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">
                                                        Connecticut
                                                    </option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">
                                                        Massachusetts
                                                    </option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">
                                                        New Hampshire
                                                    </option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">
                                                        North Carolina
                                                    </option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">
                                                        Pennsylvania
                                                    </option>
                                                    <option value="RI">
                                                        Rhode Island
                                                    </option>
                                                    <option value="SC">
                                                        South Carolina
                                                    </option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">
                                                        West Virginia
                                                    </option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                            <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                            <input type="reset" class="btn btn-default " value="Reset">
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
    <!-- col-md-6 -->
    <!--row -->
    <!--row ends-->
</div>
</aside>
<!-- /.content -->


<script src="../../../../assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="../../../../assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../../../assets/js/custom_js/app.js" type="text/javascript"></script>
        <script src="../../../../assets/js/custom_js/metisMenu.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/holder/holder.js" type="text/javascript"></script>
        <!-- end of page level js -->
        <!-- begining of page level js -->
        <script src="../../../../assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/x-editable/js/html5types.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/summernote/summernote.min.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/jasny-bootstrap/js/inputmask.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/jasny-bootstrap/js/jquery.inputmask.js" type="text/javascript"></script>
        <script src="../../../../assets/vendors/x-editable/js/demo-mock.js" type="text/javascript"></script>
        <script src="../../../../assets/js/custom_js/club_info.js" type="text/javascript"></script>
        <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/admin_clubinfo by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:49:09 GMT -->

</html>
