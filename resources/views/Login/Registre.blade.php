@extends('layouts.platform.app')
@section('title', 'Registre')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active"> Register Page</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Login Content Area -->
<div class="page-section mb-60">
    <div class="container">
        <div class="row">
            <center>
                <div class="col-sm-12 col-md-12 col-lg-8 col-xs-12 mt-3">
                    <form action="{{route('login.regitsre')}}" class="row g-3 needs-validation" novalidate style="border-top:3px solid yellow" method="post">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Register</h4>
                            <div class="row">
                                @if(!$errors->has('prenom'))
                                <div class="col-md-6 col-12 mb-20">
                                    <label>First Name</label>
                                    <input class="mb-0" type="text" name="prenom" placeholder="First Name">
                                </div>
                                @else
                                <div class="col-md-6 col-12 mb-20">
                                    <label class="text-danger">First Name (error)</label>
                                    <input class="mb-0 form-control is-invalid" type="text" name="prenom" placeholder="First Name">
                                    <div class="mt-2 text-danger">{{ $errors->first('prennom') }}</div>
                                </div>
                                @endif

                                @if(!$errors->has('nom'))
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Last Name</label>
                                    <input class="mb-0" type="text" name="nom" placeholder="Last Name">
                                </div>
                                @else
                                <div class="col-md-6 col-12 mb-20">
                                    <label class="text-danger">Last Name (error)</label>
                                    <input class="mb-0 form-control is-invalid" type="text" name="nom" placeholder="Last Name">
                                    <div class="mt-2 text-danger">{{$errors->first('nom')}}</div>
                                </div>
                                @endif

                                @if(!$errors->has('email'))
                                <div class="col-md-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="text" name="email" placeholder="Email Address">
                                </div>
                                @else
                                <div class="col-md-12 mb-20">
                                    <label class="text-danger">Email (error)</label>
                                    <input class="mb-0 form-control is-invalid" type="email" name="email" placeholder="EMAIL">
                                    <div class="mt-2 text-danger">{{$errors->first('email')}}</div>
                                </div>
                                @endif

                                @if(!$errors->has('adresse'))
                                <div class="col-md-12  mb-20">
                                    <label>adress</label>
                                    <input class="mb-0" type="text" name="adresse" placeholder="adress">
                                </div>
                                @else
                                <div class="col-md-12  mb-20">
                                    <label class="text-danger">adress (error)</label>
                                    <input class="mb-0 form-control is-invalid" type="text" name="adresse" placeholder="adress">
                                    <div class="mt-2 text-danger">{{$errors->first('adresse')}}</div>
                                </div>
                                @endif

                                @if(!$errors->has('ville'))
                                <div class="col-md-6 col-12 mb-20">
                                    <label>City</label>
                                    <input class="mb-0" type="text" name="ville" placeholder="City">
                                </div>
                                @else
                                <div class="col-md-6 col-12 mb-20">
                                    <label class="text-danger">City (error)</label>
                                    <input class="mb-0 form-control is-invalid" type="text" name="ville" placeholder="City">
                                    <div class="mt-2 text-danger">{{ $errors->first('ville') }}</div>
                                </div>
                                @endif

                                

                                @if(!$errors->has('tel'))
                                <div class="col-md-6 col-12 mb-20">
                                    <label>phone</label>
                                    <input class="mb-0" type="text" name="tel" placeholder="phone">
                                </div><br>
                                @else
                                <div class="col-md-6 col-12 mb-20">
                                    <label class="text-danger">phone (error)</label>
                                    <input class="mb-0 form-control is-invalid" type="text" name="tel" placeholder="phone">
                                    <div class="mt-2 text-danger">{{$errors->first('tel')}}</div>
                                </div>
                                @endif
                                

                                @if(!$errors->has('password'))
                                <br><div class="col-md-6 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" name="password" placeholder="Password">
                                </div>

                                @else
                                <div class="col-md-6 mb-20">
                                    <label class="text-danger">Password (error)</label>
                                    <input class="mb-0 form-control is-invalid" type="password" name="password" placeholder="Lasy Name">
                                    <div class="mt-2 text-danger">{{$errors->first('password')}}</div>
                                </div>
                                @endif


                                <div class="col-md-6 mb-20">
                                    <label>Confirm Password</label>
                                    <input class="mb-0" type="password" name="password_confirmation" placeholder="Confirm Password">
                                </div>
                                <div class="col-12">
                                    <button class="register-button mt-0" type="submit">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <br>
                    <div class="mt-5 text-muted text-center">
                        
                Already Registered? <a href="/Login" style="color: goldenrod;">Login</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>
<!-- Login Content Area End Here -->
@endsection