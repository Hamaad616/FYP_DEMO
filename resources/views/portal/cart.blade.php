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

{{--    <!-- Nivo slider CSS--}}
{{--    ============================================ -->--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('portal/lib/custom-slider/css/nivo-slider.css')}}" media="screen" />--}}
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('portal/lib/custom-slider/css/preview.css')}}" media="screen" />--}}

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

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v3.2'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=install_email
     page_id="908381092555176"
     theme_color="#7646ff">
</div>
<div class="as-mainwrapper">
    <div class="bg-white">
        <!-- header start -->
        <header class="header-area bg-light">

            <div class="header-top-area ptb-10 hidden-sm hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-4">
                            <div class="social-icons text-center">
                                <ul>
                                    @foreach($sociallink as $social)
                                        <li><a href="{{$social->social_link}}"><i class="fa fa-{{$social->name}}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-info-area ptb-35">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="header-logo">
                                <a href="{{ url('index_portal') }}"><img src="{{asset('portal/img/logo/1.png')}}" alt="Croydon"></a>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm hidden-xs col-sm-6 col-xs-12">
                            <div class="info">
                                <div class="info-icon">

                                </div>
                                <div class="info-text">
                                    <h4>{{$detail->phone}}</h4>
                                    <p>We are open 24/7</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm hidden-xs">
                            <div class="info">
                                <div class="info-icon">

                                </div>
                                <div class="info-text">
                                    <h4>{{$detail->email}}</h4>
                                    <p>You can e-mail us</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="search-box">
                                <img src="img/icon/search.png" alt="">
                                <form action="/search">
                                    <input type="text" placeholder="Search..." name="search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mainmenu-area text-center hidden-sm hidden-xs">
                <nav>
                    <div class="mainmenu">
                        <ul>
                            <li><a href="{{ url('index_portal') }}">Home</a>

                            </li>
                            <li><a href="{{ url('shop_grid') }}">Categories <span><img src="portal/img/icon/hot.png" alt=""></span></a>
                                <ul class="submenu-mainmenu">
                                    @foreach($categories as $category)
                                        <li><a  href="{{ url('shop_grid') }}"><i class="fa fa-circle"></i>{{$category->name}}<span><i class="fa fa-angle-right"></i></span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li><a href="{{ url('shop_grid') }}">New ARRIVIAL</a>
                            </li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                            <li><a href="{{ url('video_show') }}">Video</a></li>
                            <li><a href=""> {{ Auth::user()->name }} </a>
                                <ul class="submenu-mainmenu">
                                    <li>
                                        <a href="{{ route('cart.index') }}">Cart
                                            @if (Cart::instance('default')->count() > 0)
                                                <span class="cart-count"><span>({{ Cart::instance('default')->count() }})</span></span>
                                            @endif
                                        </a>
                                    </li>
                                    <li>
                                        <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}

                                            <form id = "logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        </a>

                                    </li>
                                    <li >
                                        <a href="{{route('users.edit')}}">My Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                @if(Auth::user()->hasRole('Admin'))
                                    <a href="{{url('admin_index')}}" >
                                        Admin Panel
                                    </a>
                                @endif
                            </li>

                            <li>
                                @if(Auth::user()->hasRole('CEO'))
                                    <a href="{{url('/CEO')}}" >
                                        CEO DASHBOARD
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="{{ url('index_portal') }}">HOME</a>

                                        </li>
                                        <li><a href="{{ url('showproducts') }}">Categories</a>
                                            <ul>
                                                <li><a href="{{ url('showproducts') }}">Boxing Equipments</a></li>
                                                <li><a href="{{ url('showproducts') }}">Martial Arts</a></li>
                                                <li><a href="{{ url('showproducts') }}">Sports Wears</a></li>
                                                <li><a href="{{ url('showproducts') }}">Fitness</a></li>
                                                <li><a href="{{ url('showproducts') }}">bag</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">New ARRIVIAL</a></li>
                                        <li><a href="{{ url('cart') }}">My Account</a>
                                        <li>
                                            <a href="#" >
                                                {{ Auth::user()->name }}
                                            </a>
                                        </li>
                                        <li>
                                            <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id = "logout-form" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                            </form>
                                        </li>


                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area end -->
        </header>
        <!-- header end -->

        <!-- jQuery first, then Popper.js and Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <br>
        <div class="cart-section container">
            <div>
                @if (session()->has('success_message'))
                    <div class="alert alert-success">
                        {{ session()->get('success_message') }}
                    </div>
                @endif

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (Cart::count() > 0)

                    <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>

                    <div class="cart-table">
                        @foreach (Cart::content() as $item)
                            <div class="cart-table-row">
                                <div class="cart-table-row-left">
                                    <a href="{{ url('product_detail', $item->model->slug) }}"><img src="{{ asset('uploads/' .$item->model->slug.'/'. $item->model->product_image) }}" alt="item" class="cart-table-img"></a>
                                    <div class="cart-item-details">
                                        <div class="cart-table-item"><a href="{{ url('product_detail', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                                        <div class="cart-table-description">{{ $item->model->details }}</div>
                                    </div>
                                </div>
                                <div class="cart-table-row-right">
                                    <div class="cart-table-actions">
                                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="cart-options">Remove</button>
                                        </form>

                                        <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" class="cart-options">Save for Later</button>
                                        </form>
                                    </div>
                                    <div>
                                        <select class="quantity" data-id="{{ $item->rowId }}" data-productQuantity="{{ $item->model->quantity }}">
                                            @for ($i = 1; $i < 5 + 1 ; $i++)
                                                <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div>${{ ($item->subtotal) }}</div>
                                </div>
                            </div> <!-- end cart-table-row -->
                        @endforeach

                    </div> <!-- end cart-table -->

                    @if (! session()->has('coupon'))

                        <a href="#" class="have-code">Have a Code?</a>

                        <div class="have-code-container">
                            <form action="{{ route('coupon.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="coupon_code" id="coupon_code">
                                <button type="submit" class="button button-plain">Apply</button>
                            </form>
                        </div> <!-- end have-code-container -->
                    @endif

                    <div class="cart-totals">
                        <div class="cart-totals-left">
                            Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                        </div>

                        <div class="cart-totals-right">
                            <div>
                                Subtotal <br>
                                @if (session()->has('coupon'))
                                    Code ({{ session()->get('coupon')['name'] }})
                                    <form action="{{ route('coupon.destroy') }}" method="POST" style="display:block">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" style="font-size:14px;">Remove</button>
                                    </form>
                                    <hr>
                                    New Subtotal <br>
                                @endif
                                Tax ({{config('cart.tax')}}%)<br>
                                <span class="cart-totals-total">Total</span>
                            </div>
                            <div class="cart-totals-subtotal">
                                ${{ (Cart::subtotal()) }} <br>
                                @if (session()->has('coupon'))
                                    -${{ ($discount) }} <br>&nbsp;<br>
                                    <hr>
                                    ${{ ($newSubtotal) }} <br>
                                @endif
                                ${{ ($newTax) }} <br>
                                <span class="cart-totals-total">${{ ($newTotal) }}</span>
                            </div>
                        </div>
                    </div> <!-- end cart-totals -->

                    <div class="cart-buttons">
                        <a href="{{ url('index_portal') }}" class="button">Continue Shopping</a>
                        <a href="{{ route('checkout.index') }}" class="button-primary">Proceed to Checkout</a>
                    </div>

                @else

                    <h3>No items in Cart!</h3>
                    <div class="spacer"></div>
                    <a href="{{ url('index_portal') }}" class="button">Continue Shopping</a>
                    <div class="spacer"></div>

                @endif

                @if (Cart::instance('saveForLater')->count() > 0)

                    <h2>{{ Cart::instance('saveForLater')->count() }} item(s) Saved For Later</h2>

                    <div class="saved-for-later cart-table">
                        @foreach (Cart::instance('saveForLater')->content() as $item)
                            <div class="cart-table-row">
                                <div class="cart-table-row-left">
                                    <a href="{{ url('product_detail', $item->model->id) }}"><img src="{{ asset('uploads/' .$item->model->slug.'/'. $item->model->product_image) }}" alt="item" class="cart-table-img"></a>
                                    <div class="cart-item-details">
                                        <div class="cart-table-item"><a href="{{ url('product_detail', $item->model->id) }}">{{ $item->name }}</a></div>
                                        <div class="cart-table-description">{{ $item->model->description }}</div>
                                    </div>
                                </div>
                                <div class="cart-table-row-right">
                                    <div class="cart-table-actions">
                                        <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" class="cart-options">Remove</button>
                                        </form>

                                        <form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" class="cart-options">Move to Cart</button>
                                        </form>
                                    </div>

                                    <div>${{ $item->model->price }}</div>
                                </div>
                            </div> <!-- end cart-table-row -->
                        @endforeach

                    </div> <!-- end saved-for-later -->

                @else

                    <h3>You have no items Saved for Later.</h3>

                @endif

            </div>

        </div> <!-- end cart-section -->


    </div>
</div>
    <br><br><br><br>

    <!-- footer start -->
        <div class="footer-middle-area ptb-60">
            <div class="container">
                <div class="row" id="contactus">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h5>Contact</h5>
                            <div class="single-footer-contact">
                                <div class="footer-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="footer-contact-info">
                                    <p>Croydon International</p>
                                    <p>Brush Street, Small Industrial Estate, <br> Shahabpura, Sialkot.</p>
                                </div>
                            </div>
                            <div class="single-footer-contact">
                                <div class="footer-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="footer-contact-info">
                                    <p>Telephone : {{$detail->phone}}  </p>

                                </div>
                            </div>
                            <div class="single-footer-contact">
                                <div class="footer-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="footer-contact-info">
                                    <p>Email : <a href="#">info@croydon.com.pk</a></p>
                                    <p>Facebook : <a href="https://www.facebook.com/Croydoninternational/">Croydon International</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 hidden-sm col-xs-12">
                        <div class="footer-widget">
                            <h5>News & Events</h5>
                            <div id="footernews">
                                <marquee id="MARK" direction="left">
                                    @foreach($news as $new)
                                        <a href="news_detail.php?N=4" class="news_link" onmouseover="MARK.stop();" onmouseout="MARK.start();">
                                        {{ $new->news }}
                                    @endforeach
                                </marquee>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <div class="footer-widget">
                            <h5>Company</h5>
                            <ul>
                                <li><a href="{{url('index_portal')}}"><i class="fa fa-circle"></i>Home</a></li>
                                <li><a href="{{url('shop_grid')}}"><i class="fa fa-circle"></i>Categories</a></li>
                                <li><a href="{{url('shop_grid')}}"><i class="fa fa-circle"></i>New Arrival</a></li>
                                <li><a href="{{url('contact')}}"><i class="fa fa-circle"></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-12">
                        <div class="footer-widget" >
                            <h5>Social links</h5>
                        <div class="social-icons text-center">
                            <ul>
                                @foreach($sociallink as $social)
                                   <a href="{{$social->social_link}}" style=" font-size: 40px"><i class="fa fa-{{$social->name}}"></i></a>
                                @endforeach
                            </ul>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom-area ptb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="copyright">
                            <p>Copyright @ 2020 <span><a href="{{url('index_portal')}}">Croydon</a></span>. All right reserved. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-menu text-center">
                            <nav>
                                <ul>
                                    <li><a href="{{url('index_portal')}}">Home</a></li>
                                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                                    <li class="hidden-md hidden-xs"><a href="{{url('video_show')}}">Video</a></li>
                                    <!--<li><a href="#">Newsletter</a></li>-->
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--<div class="col-md-4 hidden-sm">
                        <div class="payment text-right">
                            <img src="img/payment/1.png" alt="">
                        </div>
                    </div>-->
                </div>
            </div>
        </div>

    <!-- footer end -->

</div>



<!-- END QUICKVIEW PRODUCT -->


<!-- jquery
============================================ -->
<script src="{{ asset('portal/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap JS
============================================ -->
<script src="{{ asset('portal/js/bootstrap.min.js')}}"></script>
<!-- meanmenu JS
============================================ -->
<script src="{{ asset('portal/js/jquery.meanmenu.js')}}"></script>
<!-- wow JS
============================================ -->
<script src="{{ asset('portal/js/wow.min.js')}}"></script>
<!-- owl.carousel JS
============================================ -->
<script src="{{ asset('portal/js/owl.carousel.min.js')}}"></script>
<!-- counterdown JS
============================================ -->
<script src="{{ asset('portal/js/jquery.countdown.min.js')}}"></script>
<!-- Video Player JS
============================================ -->
<script src="{{ asset('portal/js/jquery.mb.YTPlayer.js')}}"></script>
<!-- AJax Chimp JS
============================================ -->
<script src="{{ asset('portal/js/jquery.ajaxchimp.min.js')}}"></script>
<!-- price slider JS
============================================ -->
<script src="{{ asset('portal/js/jquery-price-slider.js')}}"></script>
<!-- elevator JS
============================================ -->
<script src="{{ asset('portal/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<!-- scrollUp JS
============================================ -->
<script src="{{ asset('portal/js/jquery.scrollUp.min.js')}}"></script>
<!-- plugins JS
============================================ -->
<script src="{{ asset('portal/js/plugins.js')}}"></script>
<!-- Nevo Slider js
============================================ -->
<script type="text/javascript" src="{{ asset('portal/lib/custom-slider/js/jquery.nivo.slider.js')}}"></script>
<script type="text/javascript" src="{{ asset('portal/lib/custom-slider/home.js')}}"></script>
<!-- textillate js
============================================ -->
<script src="{{ asset('portal/js/jquery.textillate.js')}}"></script>
<script src="{{ asset('portal/js/jquery.lettering.js')}}"></script>
<!-- animated headline js
============================================ -->
<script src="{{ asset('portal/js/animate-heading.js')}}"></script>
<!-- ajax js
============================================ -->
<script src="{{ asset('portal/js/ajax-mail.js')}}"></script>
<!-- main JS
============================================ -->
<script src="{{ asset('portal/js/main.js')}}"></script>
<script src="{{ asset('portal/assets/js/jquery-1.9.1.min.js')}}"></script>




<script type="text/javascript">
    jQuery(document).ready(function() {
        // executes when HTML-Document is loaded and DOM is ready
        console.log("document is ready");
        jQuery('.btn[href^=#]').click(function(e){
            e.preventDefault();
            var href = jQuery(this).attr('href');
            jQuery(href).modal('toggle');
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{ asset('js/app.js') }}"></script>
<script>
    (function(){
        const classname = document.querySelectorAll('.quantity')
        Array.from(classname).forEach(function (element) {
            element.addEventListener('change', function (){
                const id = element.getAttribute('data-id')
                const productQuantity = element.getAttribute('data-productQuantity')
                axios.patch(`/cart/${id}`, {
                    quantity :this.value,
                    productQuantity : productQuantity
                })
                    .then(function (response) {
                        // console.log(response);
                        window.location.href = "{{route('cart.index')}}"
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            })
        })
    })();
</script>


    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>

</body>
</html>

