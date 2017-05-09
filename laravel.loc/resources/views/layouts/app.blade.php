<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vagrant's shop</title>
    <link rel="stylesheet"  href="css/mainView.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="_token" value="_token">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/addToBasket.js"></script>
<script type="text/javascript" src="js/removeFromBasket.js"></script>
<script type="text/javascript" src="js/popUp.js"></script>
<script type="text/javascript" src="js/showPart.js"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
</head>
<body>
    <header id="header" style="background: white">
        <div class="container">
            <div class="right-links">
                <ul>
                    <li><a href="basket"><span class="ico-basket"></span>My cart</a></li>
                    <li><a href="#"><span class="ico-signout"></span>Sign out</a></li>
                </ul>
            </div>
        </div>
    </header>

    @yield('content')
</body>
    <footer id="footer">
        <div class="container">
            <div class="cols">
                <div class="col">
                    <h3>Some Info</h3>
                    <ul>
                        <li><a href="aboutUs">About Us </a></li>
                        <li><a href="bank">Need money? </a></li>
                    </ul>
                </div>
                <div class="col media">
                    <h3>Social media</h3>
                    <ul class="social">
                        <li><a href="#"><span class="ico ico-fb"></span>F in box</a></li>
                        <li><a href="#"><span class="ico ico-tw"></span>Bird</a></li>
                        <li><a href="#"><span class="ico ico-gp"></span>crossbow    </a></li>
                        <li><a href="#"><span class="ico ico-pi"></span>Q</a></li>
                    </ul>
                </div>
            </div>
            <p class="copy">Copyright 2017 Vagrant's Forge. All rights reserved.</p>
        </div>
    </footer>
</html>