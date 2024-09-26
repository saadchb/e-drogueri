@extends('Layouts.platform.app')
@section('title','profile')
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="active"> Profile </li>
            </ul>
        </div>
    </div>
</div>
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Trending Product Area -->
<section class="product-area li-trending-product pt-20 pb-45 pt-xs-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Tab Menu Area -->
            <div class="col-lg-12">
                <div class="li-product-tab li-trending-product-tab mt-1">
                    <h2>
                        <span>Profile</span>
                    </h2>
                    <ul class="nav li-product-menu li-trending-product-menu">
                        <li><a class="active" data-toggle="tab" href="#home1"><span>My account  <i class="fa fa-user"></i></span></a></li>
                        <li><a data-toggle="tab" href="#home2"><span>My command  <i class="fa fa-cart-arrow-down"></i></span></a></li>
                        <li><a data-toggle="tab" href="#home3"><span>My Cart  <i class="fa fa-shopping-basket"></i></span></a></li>
                    </ul>
                </div>

                <!-- Begin Li's Tab Menu Content Area -->
                <div class="tab-content li-tab-content li-trending-product-content mt-4">
                    <div id="home1" class="tab-pane show fade in active">
                        <div class="row">
                            <div class="col-lg-4">
                                <h5><span style="border-bottom: 2px solid goldenrod;">Information of account</h5>
                                <p>Here where you can edit you information of<br> your account</p>
                            </div>
                            <div class="col-lg-8">
                                <form action="{{route('User.update',auth()->user()->id)}}" method="post" class="needs-validation">
                                    @method('put')
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="form-group col-md-7 col-12">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="prenom" value="{{auth()->user()->prenom}}">
                                                <div class="invalid-feedback">
                                                    Please fill in the first name
                                                </div>
                                            </div>
                                            <div class="form-group col-md-5 col-12">
                                                <label>Last Name</label>
                                                <input type="text" name="nom" class="form-control" value="{{auth()->user()->nom}}">
                                                <div class="invalid-feedback">
                                                    Please fill in the last name
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7 col-12">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control" value="{{auth()->user()->email}}">
                                                <div class="invalid-feedback">
                                                    Please fill in the email
                                                </div>
                                            </div>
                                            <div class="form-group col-md-5 col-12">
                                                <label>Phone</label>
                                                <input type="tel" name="tel" class="form-control" value="{{auth()->user()->tel}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7 col-12">
                                                <label>City</label>
                                                <input type="text" class="form-control" name="ville" value="{{auth()->user()->ville}}">
                                                <div class="invalid-feedback">
                                                    Please fill in the email
                                                </div>
                                            </div>
                                            <div class="form-group col-md-5 col-12">
                                                <label>Adress</label>
                                                <input type="text" name="adresse" class="form-control" value="{{auth()->user()->adresse}}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <button class="register-button mt-0">Save Change  </button>
                                    </div>
                                </form>
                                <br>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5><span style="border-bottom: 2px solid goldenrod;">Change Password</span></h5>
                            </div>
                            <div class="col-lg-8">
                                <form action="{{ route('profile.changePassword', auth()->user()->id) }}" method="POST">
                                    @method('put') <!-- This line specifies that the form should make a PUT request -->
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group  ">
                                            <label for="current_password">Current Password</label>
                                            <input id="current_password" type="password" class="form-control" name="current_password">
                                            <br>
                                        </div>
                                        <div class="form-group  ">
                                            <label for="current_password">New Password</label>
                                            <input id="current_password" type="password" class="form-control" name="new_password">
                                        </div>

                                        <div class="form-group  ">
                                            <label for="password_confirmation">Password Confirmation</label>
                                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <button class="register-button mt-0">Save Changes</button>
                                    </div>
                                </form>
                                <br>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4">
                                <h5><span style="border-bottom: 2px solid goldenrod;">Delete Account  <i class="fa fa-exclamation-triangle"></i></span></h5>
                                <p>Are you sure you want to delete your account ? This action cannot be undone. </p>
                            </div>
                            <div class="col-lg-8">
                                <div class="col-md-12 mt-4">
                                <form id="delete-form-{{auth()->user()->id}}" action="{{ route('profile.destroy', auth()->user()->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger " onclick='confirmation(event,`{{auth()->user()->id}}`)' data-toggle="modal">
                                        <i class="fa fa-trash"></i> Remove
                                    </button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="home2" class="tab-pane fade">

                    </div>
                    <div id="home3" class="tab-pane fade">

                    </div>
                </div>
                <!-- Tab Menu Content Area End Here -->
            </div>
            <!-- Tab Menu Area End Here -->
        </div>
    </div>
</section>


@endsection