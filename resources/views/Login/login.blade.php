@extends('layouts.platform.app')
@section('title', 'Login')
@section('content')

<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active"> Login Page</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->

<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div>
            <div align="center">
                <div class="col-sm-10 col-md-10 col-lg-6 col-xs-10 mt-3">
                    <form action="{{ route('login.login') }}" method="post" style="border-top:3px solid yellow">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Login</h4>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label class="text-left">Email Address*</label>
                                    <input class="mb-3" type="email" required name="email" value="{{ old('email') }}" placeholder="Email Address">
                                    @error('email')
                                    <span class="text-danger text-left">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 mb-20">
                                    <label class="text-left">Password</label>                                  
                                    <div class="input-group">
                                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" tabindex="2" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-white" onclick="togglePasswordVisibility()" >
                                                    <i style="cursor: pointer;" class="fa fa-eye" id="togglePasswordIcon"></i>
                                                </span>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                    <a href="#"> Forgotten password?</a>
                                </div>
                                <div class="col-md-12">
                                    <button class="register-button mt-0">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <br>
                    <div class="mt-5 text-muted text-center">
                        Don't have an account? <a href="/Registre" style="color: goldenrod;">Create One</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Content Area End Here -->

<script>
function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('togglePasswordIcon');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}
</script>

@endsection
