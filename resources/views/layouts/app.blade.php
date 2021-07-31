<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta htp-equitv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name') }}</title>
        
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link href="{{asset('css/mobile.css')}}" rel="stylesheet">
        <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
        <!-- <link href="{{asset('css/select2.min.css')}}" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

    </head>
<body>
    <div class="top-baar">
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('/') }}"><img src="{{ asset('images/logo.png') }}" alt="LOGO"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="#">Booking</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#">News</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                <li class="nav-item login"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            </ul>
            </div>
        </nav>
        <div class="user"><a class="user-profile" href="#"><img src="{{ asset('images/user.png') }}"></a></div>
        </div>
    </div>

    @yield('content')


    <div class="footer-saction">
    <div class="container">
      <div class="logo-ft"><img src="{{ asset('images/footer-logo.png') }}"></div>
    </div>
  </div>

  <div class="footer-copyright">
    <div class="container">
      <p>Copywrite@demosoftworldsoftware</p>
    </div>
  </div>

    <script src="{{asset('js/jquery-3.4.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    @stack('scripts')

</body>
</html>