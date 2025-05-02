<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LMS | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href=" {{ asset('assets/css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Modernize js -->
    <script src="{{ asset('assets/js/modernizr-3.6.0.min.js') }}"></script>
</head>
<body>
<!-- Preloader Start Here -->
<!-- Preloader End Here -->
<!-- Login Page Start Here -->
<div class="login-page-wrap ">
    <div class="login-page-content mt-4">
        <div class="login-box">
            <div class="item-logo">
                <img src=" {{ asset('assets/img/logo2.png') }}" alt="logo">
            </div>
            <form action="{{ route('loginMatch') }}" method="post" class="login-form">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Email" class="form-control">
                    <i class="far fa-envelope"></i>
                </div>
                @error('email')
                <span class="alert text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="*********" class="form-control">
                    <i class="fas fa-lock"></i>
                </div>
                @error('password')
                <span class="alert text-danger">{{ $message }}</span>
                @enderror
                <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember-me">
                        <label for="remember-me" class="form-check-label">Remember Me</label>
                    </div>

                    <a href="#" class="forgot-btn">Forgot Password?</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="login-btn">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Login Page End Here -->
<!-- jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    @if (Session::has('error'))
    $(document).ready(function (){
        toastr.options = {
            "progressBar" : true,
        }
        toastr.error("{{ Session::get('error') }}");
    });
    @endif
    @if (Session::has('success'))
    $(document).ready(function (){
        toastr.options = {
            "progressBar" : true,
        }
        toastr.success("{{ Session::get('success') }}");
    });
    @endif
</script>
</body>
</html>
