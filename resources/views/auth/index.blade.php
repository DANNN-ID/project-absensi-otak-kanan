<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | ABSENSI OK</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/image/logo.png') }}">
    <link href="{{ asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">

                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <!-- <div class="mb-4 text-center mb-md-5">
                                    <vscode-file: href="{{ url('/') }}" class="mb-9">
                                        <img src="{{ asset('favicon-modis.png') }}" class="mb-2" height="50"
                                            alt="Modis Fashion Bali">
                                        {{-- <img src="{{ asset('favicon-megumi.png') }}" alt="" height="28"> --}}
                                    <a href="{{ url('/') }}" class="d-block auth-logo">
                                        {{-- <span class="logo-txt">MODIS ✖ MEGUMI</span> --}}
                                        <span class="logo-txt">MODIS FASHION</span>
                                    </a>
                                </div> -->
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form class="pt-2 mt-4" action="{{ route('authenticate') }}" method="POST">
                                        @csrf
                                        <div class="mb-4 form-floating form-floating-custom">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" id="input-username"
                                                placeholder="Enter Email" name="email" autofocus required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label for="input-email">Email</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="users"></i>
                                            </div>
                                        </div>

                                        <div class="mb-4 form-floating form-floating-custom auth-pass-inputgroup">
                                            <input type="password"
                                                class="form-control pe-5 @error('password') is-invalid @enderror"
                                                name="password" id="password-input" placeholder="Enter Password" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <button type="button" class="top-0 btn btn-link position-absolute h-100 end-0"
                                                id="password-addon">
                                                <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                            </button>
                                            <label for="input-password">Password</label>
                                            <div class="form-floating-icon">
                                                <i data-feather="lock"></i>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>

                                        <div class="mb-3">
                                            <button class="btn btn-primary btn-rounded w-100 waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>
                                    </form>

                                    {{-- <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign
                                                up</a></p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>

</body>

</html>
