<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/admin_userprofile by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:49:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'User Profile')</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <script src="../../../../assets/oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../../../../assets/oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <!--[endif]-->
    <!-- global css -->
    <link type="text/css" href="../../../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="../../../../assets/css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="../../../../assets/vendors/vertical-timeline/css/style.css">
    <link rel="stylesheet" href="../../../../assets/vendors/vertical-timeline/css/reset.css">
    <link type="text/css" href="../../../../assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/vendors/x-editable/css/bootstrap-editable.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/custom_css/single_user.css" rel="stylesheet" />
    <!--end of page level css-->
</head>

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
                                    <a href='/admin/adminUserprofile'>
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
                            <a href='/admin/coupon'>
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
                        <li class="menu-dropdown">
                            <a href="#">
                                <i class="text-success menu-icon fa fa-fw fa-picture-o"></i>
                                <span class="mm-text">Notifications</span>
                                <span class="fa fa-angle-down pull-right"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href='/admin/userNotification'>
                                        <i class="text-primary fa fa-fw fa-cloud-upload"></i> User Notification
                                    </a>
                                </li>
                                <li>
                                    <a href='/admin/gymNotification'>
                                        <i class="text-success fa fa-fw fa-file-image-o"></i>GYM Notification
                                    </a>
                                </li>
                            </ul>
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
                        <a href="#">Users</a>
                    </li>
                    <li>
                        <a href='/admin/adminUserprofile'>User Profile</a>
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
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="text-center">
                                            <img src="../../../../assets/img/authors/avatar1.jpg" alt="img" width="200" height="200" class="img-bor" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-primary">Username</td>
                                                    <td>Nataliapery</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Gender</td>
                                                    <td>Female</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Date of Birth</td>
                                                    <td>03-04-1993</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Height</td>
                                                    <td>5.5</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Weight</td>
                                                    <td>50kg</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Email</td>
                                                    <td>Johnpery@example.com</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Contact Number</td>
                                                    <td>(999) 999-9999</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Address</td>
                                                    <td>Sydney, Australia</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-primary">Status</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                                                    <img class="img-responsive" src="../../../../assets/img/gallery/17.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-9">
                                                <h5 class="text-primary">Nutrition</h5>
                                                <br>
                                                <small class="text-muted"></small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
                                                    <img class="img-responsive" src="../../../../assets/img/gallery/16.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-9">
                                                <h5 class="text-primary">Workout</h5>
                                                <br>
                                                <small class="text-muted">Today at 11:15pm</small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
                                                    <img class="img-responsive" src="../../../../assets/img/gallery/6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="col-md-9">
                                                <h5 class="text-primary">Yoga</h5>
                                                <br>
                                                <small class="text-muted">Today at 1:18pm</small>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
                                            <img class="media-object img-circle" data-src="holder.js/100x100" src="#" alt="image not found" />
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
                                            <img class="media-object img-circle" data-src="holder.js/100x100" src="#" alt="image not found" />
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
                                            <img class="media-object img-circle" data-src="holder.js/100x100" src="#" alt="image not found" />
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
                                            <img class="media-object img-circle" data-src="holder.js/100x100" src="#" alt="image not found" />
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
                                            <img class="media-object img-circle" data-src="holder.js/100x100" src="#" alt="image not found" />
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
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
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
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
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
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">Lorem Ipsum is not simply random
                                                        text</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    05 / 11 / 2015 - 07 / 11 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
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
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                    </div>
                                    <!-- row -->
                                    <br/>
                                    <h4 class="lg-title mb20">Past Events</h4>
                                    <div class="row">
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">One week Yoga Special Traing</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    16 / 09 / 2015 - 21 / 09 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="event-title">
                                                    <a href="#" class="text-primary">Personal Training Happy Week</a>
                                                </h5>
                                                    <br>
                                                    <small class="text-muted">
                                                    <i class="fa fa-calendar"></i>
                                                    03 / 09 / 2015 - 09 / 09 / 2015
                                                </small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
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
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- media -->
                                        </div>
                                        <!-- col-sm-6 -->
                                        <div class="col-sm-6 events_align mb20">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object thumbnail" data-src="holder.js/100x100" src="#" alt="image not found" />
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
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...
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
                </div>
            </div>
            <!-- /.content -->
        </aside>
        <!-- /.right-side -->
    </div>
    <!-- /.right-side -->
    <!-- ./wrapper -->
    <!-- global js -->
    <script src="../../../../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../../../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../../../assets/js/custom_js/app.js" type="text/javascript"></script>
    <script src="../../../../assets/js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- begining of page level js -->
    <script src="../../../../assets/vendors/vertical-timeline/js/main.js"></script>
    <script src="../../../../assets/vendors/vertical-timeline/js/modernizr.js"></script>
    <script src="../../../../assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
    <script src="../../../../assets/js/custom_js/single_user.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/admin_userprofile by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:49:53 GMT -->
</html>
