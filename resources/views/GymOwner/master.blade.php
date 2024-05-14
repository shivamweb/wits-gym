<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/admin_clubinfo by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:48:18 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


    <link type="text/css" href="../../assets/vendors/tags/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/custom_css/metisMenu.css" rel="stylesheet" />
    <!-- date picker -->
    <link href="assets/vendors/air-datepicker-master/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <!-- date picker end -->

    <link type="text/css" href="../../assets/vendors/progressbar/css/bootstrap-progressbar.min.css" rel="stylesheet">
    <link type="text/css" href="../../assets/vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet">
    <link type="text/css" href="../../assets/vendors/select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link type="text/css" href="../../assets/css/custom_css/calendar_custom.css" rel="stylesheet">
    <link type="text/css" href="assets/vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../assets/vendors/nvd3chart/nv.d3.min.css">
    <link type="text/css" href="../../assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/custom_css/panel.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/custom_css/admin_dashboard.css" rel="stylesheet">

    <link type="text/css" href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/custom_css/metisMenu.css" rel="stylesheet" />

    <link type="text/css" href="../../assets/css/custom_css/panel.css" rel="stylesheet" />
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="../../assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/vendors/x-editable/css/bootstrap-editable.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/vendors/summernote/summernote.css" rel="stylesheet" media="screen" />
    <link type="text/css" href="../../assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/custom_css/club_info.css" rel="stylesheet" />
    <!--end of page level css-->

    <link type="text/css" href="../../assets/vendors/progressbar/css/bootstrap-progressbar.min.css" rel="stylesheet">
    <link type="text/css" href="../../assets/vendors/select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link type="text/css" href="../../assets/css/custom_css/calendar_custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/vendors/nvd3chart/nv.d3.min.css">
    <link type="text/css" href="../../assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/custom_css/panel.css" rel="stylesheet" />
    <link type="text/css" href="../../assets/css/custom_css/admin_dashboard.css" rel="stylesheet">
    <link type="text/css" href="../../assets/css/custom_css/calendar_custom.css" rel="stylesheet">

</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-static-top">
            <a class='logo' href='/dashboard'>
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="assets/img/wits-gym-logo.png" alt="image not found" style="width: 100px;height:54px;margin-top:-4px;">
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
                                    <img class="message-image img-circle" alt="image" src="assets/img/authors/avatar7.jpg">
                                    <div class="message-body"><strong>Ernest Kerry</strong>
                                        <br> Can we Meet?
                                        <br>
                                        <small>Just Now</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message">
                                    <img class="message-image img-circle" alt="image" src="assets/img/authors/avatar.jpg">
                                    <div class="message-body"><strong>John</strong>
                                        <br> Dont forgot to call...
                                        <br>
                                        <small>5 minutes ago</small>
                                        <span class="label label-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="message striped-col">
                                    <img class="message-image img-circle" alt="image" src="assets/img/authors/avatar5.jpg">
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
                                    <img class="message-image img-circle" alt="image" src="assets/img/authors/avatar1.jpg">
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
                                    <img class="message-image img-circle" alt="image" src="assets/img/authors/avatar.jpg">
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
                            @if (!empty($gymDetail->image))
                            <img src="{{ $gymDetail->image }}" width="35" class="img-circle img-responsive pull-left" height="35" alt="User Image">
                            @else
                            <img src="assets\img\defaultImage\profile.png" width="35" class="img-circle img-responsive pull-left" height="35" alt="User Image">
                            @endif
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
                                @if (!empty($gymDetail->image))
                                <img src="{{ $gymDetail->image }}" class="img-circle" alt="User Image">
                                @else
                                <img src="assets\img\defaultImage\profile.png" class="img-circle" alt="User Image">
                                @endif

                                <p>Nataliapery</p>
                            </li>
                            <!-- Menu Body -->
                            <li class="pad-3">
                                <a href={{ route('showGymProfile') }}>
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
                                    <a href={{ route('logout') }}>
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
                        <div>
                            <div class="media profile-left">
                                <a class="pull-left profile-thumb" href="#">
                                    @if (!empty($gymDetail->image))
                                    <img src="{{ $gymDetail->image }}" class="img-circle" alt="User Image">
                                    @else
                                    <img src="assets\img\defaultImage\profile.png" class="img-circle" alt="User Image">
                                    @endif

                                </a>
                                <div class="content-profile">
                                    <h4 class="media-heading">
                                        @if (isset($gymDetail))
                                        {{ $gymDetail->gym_name }}
                                        @endif
                                    </h4>
                                    <span class="text-default">
                                        @if (isset($gymDetail))
                                        {{ $gymDetail->username }}
                                        @endif
                                    </span>
                                </div>
                            </div>

                            <ul class="navigation">
                                <li>
                                    <a href='/dashboard'>
                                        <i class="text-primary menu-icon fa fa-fw fa-dashboard"></i>
                                        <span class="mm-text ">Dashboard</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href='/gym-subscription'>
                                        <i class="text-success menu-icon fa fa-fw fa-info-circle"></i>
                                        <span class="mm-text">Gym Subscription</span>
                                    </a>
                                </li>
                                <li class="active" id="active">
                                    <a href='/gym-staff'>
                                        <i class="text-primary menu-icon fa fa-th fa-info-circle"></i>
                                        <span class="mm-text">Gym Staff</span>
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
                                            <a href={{ route('listGymUser') }}>
                                                <i class="text-primary fa fa-fw fa-users"></i> Users List
                                            </a>
                                        </li>

                                        <li>
                                            <a href='/addUsers'>
                                                <i class="text-info fa fa-fw fa-user"></i> Add Users
                                            </a>
                                        </li>
                                        <li>
                                            <a href='/userPayment'>
                                                <i class="text-danger fa fa-fw fa-money"></i> Payments
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='/gym-coupon'>
                                        <i class="text-success menu-icon fa fa-life-ring fa-info-circle"></i>
                                        <span class="mm-text">Coupons</span>
                                    </a>
                                </li>
                                <li class="menu-dropdown">
                                    <a href="#">
                                        <i class="text-info menu-icon fa fa-fw fa-newspaper-o"></i>
                                        <span class="mm-text">News</span>
                                        <span class="fa fa-angle-down pull-right"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href='/news'>
                                                <i class="text-primary menu-icon fa fa-inbox"></i> News
                                            </a>
                                        </li>
                                        <li>
                                            <a href='/addNews'>
                                                <i class="menu-icon text-success fa fa-pencil"></i> Add News
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-dropdown">
                                    <a href="#">
                                        <i class="text-danger menu-icon fa fa-fw fa-calendar"></i>
                                        <span class="mm-text">Events</span>
                                        <span class="fa fa-angle-down pull-right"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href='/eventLists'>
                                                <i class="text-primary menu-icon fa fa-fw fa-list"></i> Events List
                                            </a>
                                        </li>
                                        <li>
                                            <a href='/eventItems'>
                                                <i class="text-info menu-icon fa fa-fw fa-fast-forward"></i> Event Item
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- <li class="menu-dropdown">
                                    <a href="#">
                                        <i class="text-warning menu-icon fa fa-fw fa-graduation-cap"></i>
                                        <span class="mm-text">Course Schedule</span>
                                        <span class="fa fa-angle-down pull-right"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href='/courseSchedule'>
                                                <i class="text-primary fa fa-fw fa-th"></i> Course Schedule
                                            </a>
                                        </li>
                                        <li>
                                            <a href='/courses'>
                                                <i class="text-success fa fa-fw fa-indent"></i> Courses
                                            </a>
                                        </li>
                                        <li>
                                            <a href='/rooms'>
                                                <i class="text-info fa fa-fw fa-star"></i> Rooms
                                            </a>
                                        </li>
                                        <li>
                                            <a href='/trainers'>
                                                <i class="text-danger fa fa-fw fa-paw"></i> Trainers
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li>
                                    <a href='/viewAddEnquiry'>
                                        <i class="text-primary  menu-icon fa fa-question-circle"></i>
                                        <span class="mm-text">Enquiry</span>
                                    </a>
                                </li>

                                <li class="menu-dropdown">
                                    <a href="#">
                                        <i class="text-success menu-icon fa fa-fw fa-picture-o"></i>
                                        <span class="mm-text">Gallery</span>
                                        <span class="fa fa-angle-down pull-right"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href='/addGallery'>
                                                <i class="text-primary fa fa-fw fa-cloud-upload"></i> Add Gallery
                                            </a>
                                        </li>
                                        <li>
                                            <a href='/gallery'>
                                                <i class="text-success fa fa-fw fa-file-image-o"></i> Gallery
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href='/calendar'>
                                        <i class="text-info menu-icon fa fa-fw fa-clock-o"></i>
                                        <span class="mm-text ">Class Calendar</span>
                                    </a>
                                </li>

                                <li>
                                    <a href={{ route('showGymProfile') }}>
                                        <i class="text-success fa fa-fw fa-user"></i> Gym Profile
                                    </a>
                                </li>

                                <li class="menu-dropdown">
                                    <a href="#">
                                        <i class="text-success menu-icon fa fa-fw fa-question-circle"></i>
                                        <span class="mm-text">FAQ</span>
                                        <span class="fa fa-angle-down pull-right"></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href='/faq'>
                                                <i class="text-primary fa fa-fw fa-question-circle"></i> FAQ
                                            </a>
                                        </li>
                                        <li>
                                            <a href='/addFaq'>
                                                <i class="text-success fa fa-fw fa-question"></i> Add Faq
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- / .navigation -->
                        </div>
                    </div> <!-- menu -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Header (Page header) -->
        <!--section ends-->
        @yield('content')
        <!-- /#right -->
        <!-- /.content -->

    </div>

    <script src="../../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../assets/js/custom_js/app.js" type="text/javascript"></script>
    <script src="../../assets/js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="../../assets/vendors/holder/holder.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <script src="../../assets/vendors/jquery-circliful/js/jquery.circliful.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/progressbar/bootstrap-progressbar.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/countUp/countUp.js" type="text/javascript"></script>
    <script src="../../assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
    <!-- begining of page level js -->
    <script src="../../assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js" type="text/javascript"></script>
    <script src="../../assets/vendors/x-editable/jquery.mockjax.js" type="text/javascript"></script>
    <script src="../../assets/vendors/x-editable/bootstrap-editable.js" type="text/javascript"></script>
    <script src="../../assets/vendors/x-editable/js/html5types.js" type="text/javascript"></script>
    <script src="../../assets/vendors/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="../../assets/vendors/jasny-bootstrap/js/inputmask.js" type="text/javascript"></script>
    <script src="../../assets/vendors/jasny-bootstrap/js/jquery.inputmask.js" type="text/javascript"></script>
    <script src="../../assets/vendors/x-editable/js/demo-mock.js" type="text/javascript"></script>
    <script src="../../assets/js/custom_js/club_info.js" type="text/javascript"></script>
    <!-- end of page level js -->
    <script src="../../assets/vendors/air-datepicker-master/dist/js/datepicker.min.js"></script>
    <script src="../../assets/vendors/air-datepicker-master/dist/js/i18n/datepicker.en.js"></script>


    <!-- date picker end -->
    <script src="assets/vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="assets/vendors/fullcalendar/fullcalendar.js" type="text/javascript"></script>
    <script src="assets/vendors/d3-chart/d3.v3.min.js" type="text/javascript"></script>
    <script src="assets/vendors/nvd3chart/nv.d3.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/vendors/jquery-easy-ticker-master/jquery.easy-ticker.min.js"></script>
    <script src="assets/vendors/inputmask/inputmask/inputmask.js" type="text/javascript"></script>
    <script src="assets/vendors/inputmask/inputmask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="assets/vendors/inputmask/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="assets/js/custom_js/admin_index.js" type="text/javascript"></script>
    <!-- end of page level js -->

</body>

</html>
