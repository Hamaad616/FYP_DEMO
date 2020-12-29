<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Croydon</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Croydonicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="portal/img/logo-icon.png">
    <!-- Styles -->
    {{--    <link rel="stylesheet" href="{{ asset('css/cart/style.css')}}">--}}
    <link rel="stylesheet" href="{{ asset('css/cart/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart/responsive.css') }}">

    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/bootstrap.min.css')}}">


<!-- Fontawsome CSS
                    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">

    {{--    <!-- owl.carousel CSS--}}
    {{--    ============================================ -->--}}
    {{--    <link rel="stylesheet" href="{{ asset('portal/css/owl.carousel.css')}}">--}}

    {{--    <!-- jquery-ui CSS--}}
    {{--    ============================================ -->--}}
    <link rel="stylesheet" href="{{ asset('cart/css/jquery-ui.css')}}">

    {{--    <!-- meanmenu CSS--}}
    {{--    ============================================ -->--}}
    <link rel="stylesheet" href="{{ asset('cart/css/meanmenu.min.css')}}">

{{--    <!-- animate CSS--}}
{{--    ============================================ -->--}}
{{--    <link rel="stylesheet" href="{{ asset('cart/css/animate.css')}}">--}}

<!-- Animate headline CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('cart/css/animate-heading.css')}}">
    <link rel="stylesheet" href="{{ asset('cart/portal/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('cart/portal/css/reset.css')}}">

    <!-- Video CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('cart/css/jquery.mb.YTPlayer.css')}}">

    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/style.css')}}">
{{--    <link rel="stylesheet" href="{{ asset('portal/webportal.css')}}">--}}

<!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('portal/css/responsive.css')}}">

    <style>
        select {
            background-color: white;
            border: thin solid grey;
            border-radius: 4px;
            display: inline-block;
            font: inherit;
            line-height: 1.5em;
            padding: 0.5em 3.5em 0.5em 1em;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-appearance: none;
            -moz-appearance: none;
        }
        select.arrows {
            background-image:    url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAA3klEQVRIS+3VMU9CMRTF8d8zBL+aizoQFhx0kUk33RzdYMNFXUFnYeGrYYyaJiUxJHDLSxodbNKpfeffc9/pbaPyaCrr+3OA++z4rtT5Pg5GuMnCY9yWQEoBE1xhlUUP8YDrCBIB0vojLvGO0yz4hm4JJAKcYYoPHGOZAUdYoIMBXrc5iQAHeMlzviFygj7O8dkWEJU4XI8chALRhn9AVKHf70VRTHu4wFfbmKZLNKt50dLBnna0imcMd/2I0phWa3Y/D1e1Xa9BCZJG0VuQNpaWKMx72xS1Fl5/WN3BN+AgJhnZQlq4AAAAAElFTkSuQmCC');
            background-position: calc(100% - .5rem), 100% 0;
            background-size:  1.5em 1.5em;
            background-repeat: no-repeat;
        }

        select.arrows:focus {
            border-color: blue;
            outline: 0;
        }

        /*a:hover {*/
        /*    background-color: #ec552c;*/
        /*    text-decoration: none;*/
        /*    font-weight:0;*/
        /*}*/

        div{
            font-family: Montserrat,serif
        }

    </style>

</head>
<body>
<div class="header-area">
    <div class="mainmenu-area text-center hidden-sm hidden-xs">
        <nav>
            <div class="mainmenu">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a>

                    </li>
                    <li><a href="{{ url('customer_shop_grid') }}">Categories</a>
                    </li>

                    <li><a href="{{ url('customer_shop_grid') }}">New ARRIVIAL</a>
                    </li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="{{ url('video_show') }}">Video</a></li>

                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="auth-pages">
        <div>
            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h2>Create Account</h2>
            <div class="spacer"></div>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                <input id="password" type="password" class="form-control" name="password" placeholder="Password" placeholder="Password" required>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password"
                       required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Create Account</button>
                    <div class="already-have-container">
                        <p><strong>Already have an account?</strong></p>
                        <a href="{{ route('login') }}">Login</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="auth-right">
            <h2>New Customer</h2>
            <div class="spacer"></div>
            <p><strong>Save time now.</strong></p>
            <p>Creating an account will allow you to checkout faster in the future, have easy access to order history and customize your experience to suit your preferences.</p>

            &nbsp;
            <div class="spacer"></div>
            <p><strong>Tip: Coupons</strong></p>
            <p>Registered Users can also apply coupons during checkout and get discount of items!</p>
        </div>
    </div> <!-- end auth-pages -->
</div>

</body>
</html>

