<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> droguerie- @yield('title')</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="platform/assets/image/x-icon" href="{{asset('platform/assets/images/favicon.png')}}">
    <!-- Add Toastr CSS -->



    <!-- CSS -->
    @include('Layouts.platform.css')
    <script src="{{asset('platform/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
 
    <!-- HEADER -->
    @include('Layouts.platform.header')

    <!-- Page Contain -->
    <div class="body-wrapper">
        @yield('content')
    </div>



    @include('Layouts.platform.footer')

    @include('Layouts.platform.js')
</body>

</html>