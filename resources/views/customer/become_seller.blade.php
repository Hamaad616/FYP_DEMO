<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Croydon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
		<!-- Croydonicon
        ============================================ -->        
        <link rel="shortcut icon" type="image/x-icon" href="portal/img/logo-icon.png">
		
		<!-- Bootstrap CSS
        ============================================ -->        
        <link rel="stylesheet" href="{{ asset('portal/css/bootstrap.min.css')}}">
        
        <!-- Nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" type="text/css" href="{{ asset('portal/lib/custom-slider/css/nivo-slider.css')}}" media="screen" />   
        <link rel="stylesheet" type="text/css" href="{{ asset('portal/lib/custom-slider/css/preview.css')}}" media="screen" />
        
        <!-- Fontawsome CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('portal/css/font-awesome.min.css')}}">
          
        
                        
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('portal/css/owl.carousel.css')}}">
        
        <!-- jquery-ui CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('portal/css/jquery-ui.css')}}">
        
        <!-- meanmenu CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('portal/css/meanmenu.min.css')}}">
        
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('portal/css/animate.css')}}">
          
        <!-- Animate headline CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('portal/css/animate-heading.css')}}">
        <link rel="stylesheet" href="{{ asset('portal/css/reset.css')}}">
        
        <!-- Video CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('portal/css/jquery.mb.YTPlayer.css')}}">
        
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('portal/style.css')}}">
        
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('portal/css/responsive.css')}}">
        
        <!-- modernizr JS
        ============================================ -->
                
        
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
                <header class="header-area">
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
                                        <a href="{{ url('/') }}"><img src="{{asset('portal/img/logo/1.png')}}" alt="Croydon"></a>
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
                                        <form action="/customer_search">
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
                                    <li><a href="{{ url('/') }}">Home</a>
                                       
                                    </li>
                                    <li><a href="{{ url('customer_shop_grid') }}">Categories <span><img src="portal/img/icon/hot.png" alt=""></span></a>
                                <ul class="submenu-mainmenu">
                                    @foreach($categories as $category)
                                        <li><a  href="{{ url('customer_shop_grid') }}"><i class="fa fa-circle"></i>{{$category->name}}<i class="fa fa-angle-right"></i><span></a>
                                        </li>
                                    @endforeach
                                        </ul>
                                    </li>
                                    
                                    
                                    <li><a href="{{ url('customer_shop_grid') }}">New ARRIVIAL</a>   
                                    </li>
                                    
                                    
                                    <li><a href="{{ url('customer_contact') }}">Contact</a></li>
                                    <li><a href="{{ url('customer_video_show') }}">Video</a></li>
                
        
                                <li><a href="{{url('become_a_seller')}}">Become a seller</a></li>
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
                                                <li><a href="{{ url('/') }}">HOME</a>
                                                   
                                                </li>
                                                <li><a href="{{ url('customer_showproducts') }}">Categories</a>
                                                    <ul>
                                                    <li><a href="{{ url('customer_showproducts') }}">Boxing Equipments</a></li>
                                                    <li><a href="{{ url('customer_showproducts') }}">Martial Arts</a></li>
                                                    <li><a href="{{ url('customer_showproducts') }}">Sports Wears</a></li>
                                                    <li><a href="{{ url('customer_showproducts') }}">Fitness</a></li>
                                                    <li><a href="{{ url('customer_showproducts') }}">bag</a></li>
                                                    </ul>
                                                    </li>
                                                    <li><a href="#">New ARRIVIAL</a></li>
                                                    <!-- <li><a href="{{ url('cart') }}">My Account</a> -->
                                                    <ul>     
                                                        <li><a href="{{ url('customer_contact') }}">Contact</a></li>
                                                        <li><a href="{{ url('customer_video_show') }}">Video</a></li>
                                                    </ul>
                                                    
                                                    
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

                    !-- jQuery first, then Popper.js and Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        