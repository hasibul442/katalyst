<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Katalyst Bangladesh Limited" name="description" />
    <meta content="Mohammad Hasibul Hasan" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/Logo/Logo-K.png') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

    {{-- <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="fas fa-home h2 text-white"></i></a>
        </div> --}}

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <a href="index.html">
                                    <span><img src="{{ asset('assets/images/Logo/Logo-K.png') }}" alt="" height="60"></span>
                                </a>
                            </div>

                            <form method="POST" action="{{ route('register') }}" class="pt-2">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name">Full Name</label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name" placeholder="Enter your name" required name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email address</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Enter your email" autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password">Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required id="password" autocomplete="new-password" placeholder="Enter your password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3" style="display: none">
                                    <input class="form-control" type="text" name="user_type" value="Super_Admin">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input class="form-control" type="password" name="password_confirmation" required id="password-confirm" autocomplete="new-password" placeholder="Enter your password Again">
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                    <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-success btn-block" type="submit"> Sign Up </button>
                                </div>

                            </form>

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p class="text-muted mb-0">Already have account? <a href="{{ route('login') }}" class="text-dark ml-1"><b>Sign In</b></a></p>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
       <!-- Scripts -->
       <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
