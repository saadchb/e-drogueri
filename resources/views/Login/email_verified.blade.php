<!DOCTYPE html>
<html lang="en">

<!-- auth-login.html  Tue, 07 Jan 2020 03:39:47 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login </title>
    <link rel="icon" href="{{ asset('build/assets/images/image.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('assets/modules/bootstrap-social/bootstrap-social.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('build/assets/css/style.css')}}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.min.css')}}">

</head>

<body class="layout-4">
  <main class="page-content container">
    <div class="devise " >
  <br><br><br><div class="devise__main">
    <h1 class="mbm">Thank You For <br>Signing Up!</h1>
    <h2 class="text-normal">
      Check the confirmation email
          at <strong>{{$email}}</strong>
    </h2>
    <p class="mbm">Note: If you do not receive the email in few minutes:</p>
    <ul>
      <li>check spam folder</li>
      <li>verify if you typed your email correctly</li>
    </ul>
  </div>
  <div class="devise__sub">
  </div>
</div>

  </main>
    <!-- General JS Scripts -->
    <script src="{{asset('assets/bundles/lib.vendor.bundle.js')}}"></script>
    <script src="{{asset('js/CodiePie.js')}}"></script>


</script>
    <!-- Template JS File -->
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

<!-- auth-login.html  Tue, 07 Jan 2020 03:39:47 GMT -->

</html>