<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.lorvent.com/fitness/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:47:22 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="../../../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/font-awesome.min.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/custom_css/metisMenu.css" rel="stylesheet" />
    <!-- Date picker -->
    <link href="../../../../assets/vendors/air-datepicker-master/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <!-- end of global css -->
    <!-- page level css -->
    <link type="text/css" href="../../../../assets/vendors/jquery-circliful/css/jquery.circliful.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="vendors/jquery-plugin-circliful-master/css/jquery.circliful.css"> -->
    <link type="text/css" href="../../../../assets/vendors/progressbar/css/bootstrap-progressbar.min.css" rel="stylesheet">
    <link type="text/css" href="../../../../assets/vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet">
    <link type="text/css" href="../../../../assets/vendors/select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link type="text/css" href="../../../../assets/css/custom_css/calendar_custom.css" rel="stylesheet">
    <link type="text/css" href="../../../../assets/vendors/sweetalert/dist/sweetalert2.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../../../assets/vendors/nvd3chart/nv.d3.min.css">
    <link type="text/css" href="../../../../assets/css/custom_css/fitness.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/custom_css/panel.css" rel="stylesheet" />
    <link type="text/css" href="../../../../assets/css/custom_css/admin_dashboard.css" rel="stylesheet">
    <!-- end of page level css -->
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-static-top">
            <a class='logo' href='/'>
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
                                <a href="/admin/adminUserprofile">
                                    <i class="fa fa-fw fa-user"></i> My Profile
                                </a>
                            </li>
                            <!-- <li role="presentation"></li> -->
                            <!-- <li>
                                <a href="#">
                                    <i class="fa fa-fw fa-gear"></i> Account Settings
                                </a>
                            </li> -->
                            <li role="presentation" class="divider"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <!-- <div class="pull-left">
                                    <a href="#">
                                        <i class="fa fa-fw fa-lock"></i> Lock
                                    </a>
                                </div> -->
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
                                <img src="../../assets/img/authors/avatar1.jpg" class="img-circle" alt="User Image">
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
                            <ul class="sub-menu">
                                <li>
                                    <a href='/admin/gymUserList'>
                                        <i class="text-primary fa fa-fw fa-users"></i> Users List
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href='/admin/adminUserprofile'>
                                        <i class="text-success fa fa-fw fa-user"></i> User Profile
                                    </a>
                                </li> -->
                                <li>
                                    <a href='/admin/addAdminUsers'>
                                        <i class="text-info fa fa-fw fa-user"></i> Add Users
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href='/admin/viewAdminCoupons'>
                                <i class="text-primary  menu-icon fa fa-scissors"></i>
                                <span class="mm-text">Coupons</span>
                            </a>
                        </li>
                        <li>
                            <a href='/admin/viewDesignation'>
                                <i class="text-primary  menu-icon fa fa-scissors"></i>
                                <span class="mm-text">Designation</span>
                            </a>
                        </li>
                        <li>
                            <a href='/admin/viewAdvertisment'>
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
                                    <a href='/admin/viewNotification'>
                                        <i class="text-primary fa fa-fw fa-cloud-upload"></i> User Notification
                                    </a>
                                </li>
                                <li>
                                    <a href='/admin/viewGymNotification'>
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
        <aside class="right-side">
            <!-- Content Header (Page header) -->
            <!--section ends-->
            <div class="container-fluid">
                <div class="row bg-color">
                   
                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="box-model">
                                    <h4>Trainers</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered trainer">
                                            <thead>
                                                <tr class="bg-primary">
                                                    <th>Sl.No</th>
                                                    <th>Course</th>
                                                    <th>Personal Trainers</th>
                                                    <th>General Trainers</th>
                                                    <th>Total</th>
                                                    <th>view</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Yoga</td>
                                                    <td>09</td>
                                                    <td>08</td>
                                                    <td>17</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Aerobics</td>
                                                    <td>12</td>
                                                    <td>10</td>
                                                    <td>22</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Fitness</td>
                                                    <td>14</td>
                                                    <td>12</td>
                                                    <td>26</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Body Building</td>
                                                    <td>11</td>
                                                    <td>09</td>
                                                    <td>20</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Zumba</td>
                                                    <td>15</td>
                                                    <td>12</td>
                                                    <td>27</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Flexibility</td>
                                                    <td>07</td>
                                                    <td>05</td>
                                                    <td>12</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="box-model">
                            <div class="row">
                                <div class=" col-lg-12 col-xs-12">
                                    <table style="width: -webkit-fill-available;">
                                        <caption align="top">Month July </caption>
                                        <thead>
                                            <tr>
                                                <th style="color: white; background: purple;">
                                                    Sun</th>
                                                <th style="color: white; background: purple;">
                                                    Mon</th>
                                                <th style="color: white; background: purple;">
                                                    Tue</th>
                                                <th style="color: white; background: purple;">
                                                    Wed</th>
                                                <th style="color: white; background: purple;">
                                                    Thu</th>
                                                <th style="color: white; background: purple;">
                                                    Fri</th>
                                                <th style="color: white; background: purple;">
                                                    Sat</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>1</td>
                                                <td>2</td>
                                            </tr>
                                            <tr></tr>
                                            <tr>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</td>
                                                <td>9</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>12</td>
                                                <td>13</td>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>16</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>18</td>
                                                <td>19</td>
                                                <td>20</td>
                                                <td>21</td>
                                                <td>22</td>
                                                <td>23</td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>25</td>
                                                <td>26</td>
                                                <td>27</td>
                                                <td>28</td>
                                                <td>29</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>6</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="box-model">
                            <h4>Quick Stats</h4>
                            <div class="row">
                                <div class="col-lg-6 col-xs-6 text-center">
                                    <p class="income">Monthly Income</p>
                                    <div id="myStat2" data-dimension="210" data-width="20" data-text="70%" data-fontsize="20" data-percent="70" data-fgcolor="#33a4d8" data-bgcolor="#f7f7f7"></div>
                                </div>
                                <div class="col-lg-6 col-xs-6 text-center">
                                    <p class="income">Yearly Income</p>
                                    <div id="myStat3" data-dimension="210" data-width="20" data-text="85%" data-fontsize="20" data-percent="85" data-fgcolor="#65a800" data-bgcolor="#f7f7f7"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-xs-12">
                                    <div class="amount">
                                        <p>Pending Amount <span class="pull-right">%</span><span id="pending_amount" class="pull-right">30</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-primary"></div>
                                        </div>
                                        <p>Pending Users <span class="pull-right">%</span><span id="fifty" class="pull-right">50</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#right -->
            <!-- /.content -->
        </aside>
    </div>
    <script src="../../../../assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="../../../../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../../../assets/js/custom_js/app.js" type="text/javascript"></script>
    <script src="../../../../assets/js/custom_js/metisMenu.js" type="text/javascript"></script>
    <script src="../../../../assets/js/custom_js/backstretch.js"></script>
    <!-- end of global level js -->
    <script src="../../../../assets/vendors/jquery-circliful/js/jquery.circliful.min.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/progressbar/bootstrap-progressbar.min.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/countUp/countUp.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
    <!-- date picker -->
    <script src="../../../../assets/vendors/air-datepicker-master/dist/js/datepicker.min.js"></script>
    <script src="../../../../assets/vendors/air-datepicker-master/dist/js/i18n/datepicker.en.js"></script>
    <!-- date picker end -->
    <script src="../../../../assets/vendors/sweetalert/dist/sweetalert2.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/fullcalendar/fullcalendar.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/d3-chart/d3.v3.min.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/nvd3chart/nv.d3.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="../../../../assets/vendors/jquery-easy-ticker-master/jquery.easy-ticker.min.js"></script>
    <script src="../../../../assets/vendors/inputmask/inputmask/inputmask.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/inputmask/inputmask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="../../../../assets/vendors/inputmask/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="../../../../assets/js/custom_js/admin_index.js" type="text/javascript"></script>
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:48:05 GMT -->

</html>