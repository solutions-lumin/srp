<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | CRMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <meta name="description" content="Streamline your business with our advanced CRM template.">
    <meta name="keywords" content="CRM, Laravel, Bootstrap">
    <meta name="author" content="Dreams Technologies">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-icon.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/tabler-icons/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="app-style">
</head>

<body class="account-page bg-white">
    <div class="main-wrapper">
        <div class="overflow-hidden p-3 acc-vh">
            <div class="row vh-100 w-100 g-0"> 
                <div class="col-lg-6 vh-100 overflow-y-auto overflow-x-hidden">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <!-- Laravel Login Form -->
                            <form method="POST" action="{{ route('login') }}" class="vh-100 d-flex justify-content-between flex-column p-4 pb-0">
                                @csrf

                                <div class="text-center mb-4 auth-logo">
                                    <img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid" alt="Logo">
                                </div>

                                <div>
                                    <div class="mb-3">
                                        <h3 class="mb-2">Sign In</h3>
                                        <p class="mb-0">Access the CRMS panel using your email and password.</p>
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="input-group input-group-flat">
                                            <input type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control @error('email') is-invalid @enderror">
                                            <span class="input-group-text"><i class="ti ti-mail"></i></span>
                                        </div>
                                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group input-group-flat pass-group">
                                            <input type="password" name="password" required class="form-control pass-input @error('password') is-invalid @enderror">
                                            <span class="input-group-text toggle-password"><i class="ti ti-eye-off"></i></span>
                                        </div>
                                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                    <!-- Remember + Forgot -->
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <div class="form-check form-check-md d-flex align-items-center">
                                            <input class="form-check-input mt-0" type="checkbox" name="remember" id="remember">
                                            <label class="form-check-label text-dark ms-1" for="remember">
                                                Remember Me
                                            </label>
                                        </div>
                                        <div class="text-end">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="link-danger fw-medium link-hover">Forgot Password?</a>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Submit -->
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary w-100">Sign In</button>
                                    </div>

                                    <!-- Register -->
                                    @if (Route::has('register'))
                                    <div class="mb-3">
                                        <p class="mb-0">New on our platform?
                                            <a href="{{ route('register') }}" class="link-indigo fw-bold link-hover"> Create an account</a>
                                        </p>
                                    </div>
                                    @endif

                                    <!-- Social Login (Optional) -->
                                    <div class="or-login text-center position-relative mb-3">
                                        <h6 class="fs-14 mb-0 position-relative text-body">OR</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 mb-3">
                                        <div class="text-center flex-fill">
                                            <a href="#" class="p-2 btn btn-info d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1" src="{{ asset('assets/img/icons/facebook-logo.svg') }}" alt="Facebook">
                                            </a>
                                        </div>
                                        <div class="text-center flex-fill">
                                            <a href="#" class="p-2 btn btn-outline-light d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1" src="{{ asset('assets/img/icons/google-logo.svg') }}" alt="Google">
                                            </a>
                                        </div>
                                        <div class="text-center flex-fill">
                                            <a href="#" class="p-2 btn btn-dark d-flex align-items-center justify-content-center">
                                                <img class="img-fluid m-1" src="{{ asset('assets/img/icons/apple-logo.svg') }}" alt="Apple">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center pb-4">
                                    <p class="text-dark mb-0">Copyright &copy; <script>document.write(new Date().getFullYear())</script> - CRMS</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 account-bg-01"></div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>    
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
