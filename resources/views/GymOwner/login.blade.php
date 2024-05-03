<!DOCTYPE html>
<html>


<!-- Mirrored from demo.lorvent.com/fitness/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:48:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <title>Login | Gym</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- global level css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="assets/vendors/iCheck/skins/all.css" rel="stylesheet" type="text/css">
    <link type="text/css" href="assets/vendors/bootstrapvalidator/dist/css/bootstrapValidator.css" rel="stylesheet" />
    <link href="assets/css/custom_css/login.css" rel="stylesheet" type="text/css">
    <!-- end of page level styles-->
</head>

<body>
    <div class="container">
        <div class="full-content-center">
            <div class="box bounceInLeft animated">
                <img src="assets/img/logo.png" class="logo" alt="image not found">
                <h3 class="text-center">User Log In</h3>
                <form class="form" id="log_in" method="POST" action="{{route('gymLogin')}}">
                    @csrf
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label class="sr-only"></label>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="checkbox text-left">
                        <label>
                            <input type="checkbox"> Remember Password
                        </label>
                    </div>
                    <input type="submit" class="btn btn-block btn-warning" value="Log In">
                </form>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="text-left"><a class='text-warning forgot_color' href='/register' style='color: white'>Register</a></p>
                    </div>
                    <div class="col-sm-6">
                        <p class="text-right"><a class='text-warning forgot_color' href='#' style='color: white'>Forgot Password?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global js -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- end of global js -->
    <!-- begining of page level js -->
    <script src="assets/vendors/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="assets/vendors/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>
    <script src="assets/js/custom_js/login1.js" type="text/javascript"></script>
     {{-- Custom sweetAlert --}}
     @include('CustomSweetAlert');
    <!-- end of page level js -->
</body>


<!-- Mirrored from demo.lorvent.com/fitness/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2024 12:48:18 GMT -->

</html>
