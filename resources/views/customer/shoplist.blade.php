<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Croydon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    

        <!-- page css -->
    <link href="{{ asset('dash/css/style.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dash/css/pages/login-register-lock.css')}}" rel="stylesheet">
        
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
                                        <form action="customer_search" method="POST">
                                        {{ csrf_field() }}
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
                                   
                                    <!-- <li><a href="{{ url('admin_index') }}">Admin Panel</a></li>
                                
                                 
                                 <li><a href="{{ url('index_dash') }}">Admin Panel</a></li> -->
                              
                                <li><a href="#">Become a seller</a></li>
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
                                                    <li><a href="{{ url('customer_cart') }}">My Account</a>
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
                
                 <!-- slider start -->

<!-- shop start -->
<div class="shop-area-start rightsidebar mt-90">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="shop-item-filter">
                        <div class="col-lg-3 col-md-2 col-sm-5 col-xs-5">
                            <div class="shop-tab clearfix">
                                <!-- Nav tabs -->
                                <ul role="tablist">
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="{{url('customer_shop_grid')}}"><i class="fa fa-th"></i></a></li>
                                </ul>
                            </div>
                        </div>    
                        <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">      
                            <div class="filter-by">
                                <h4>Short by: </h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select>
                                          <option value="color">Position</option>
                                          <option value="name">Name</option>
                                          <option value="brand">Brand</option>
                                        </select> 
                                    </div>
                                </form>                             
                            </div>
                            <div class="filter-by">
                                <h4>Show: </h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select>
                                          <option value="10">12</option>
                                          <option value="20">16</option>
                                          <option value="30">20</option>
                                        </select> 
                                    </div>
                                </form> 
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-4 col-sm-7 col-xs-7">
                            <div class="page-menu float-right">     
                                <ul>
                                    <li class="li-page">Page: </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-md hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="tab-content mt-25">
                    <div id="grid" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/1.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                    <div class="new-sale">
                                        <span class="black hidden-sm">new</span>
                                        <span class="red hidden-sm">hot</span>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/2.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                    <div class="new-sale">
                                        <span class="red hidden-sm">sale</span>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/3.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/4.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                    <div class="new-sale">
                                        <span class="red hidden-sm">hot</span>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/5.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/24.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$135</span>
                                                <span class="old-price">$145</span>
                                            </div> 
                                            <h3><a href="#">Peletria ostma</a></h3>  
                                        </div>
                                    </div>
                                    <div class="new-sale m-10">
                                        <span class="red hidden-sm">hot</span>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/25.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$120</span>
                                                <span class="old-price">$130</span>
                                            </div>
                                            <h3><a href="#">Niletria postma</a></h3>  
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/26.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$100</span>
                                                <span class="old-price">$120</span>
                                            </div>  
                                            <div class="new-sale">
                                                <span class="red hidden-sm">sale</span>
                                            </div>
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/27.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                    <div class="new-sale">
                                        <span class="red hidden-sm">hot</span>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/28.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div>  
                                            <div class="new-sale">
                                                <span class="black hidden-sm">new</span>
                                                <span class="red hidden-sm">sale</span>
                                            </div>
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/29.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                    <div class="new-sale">
                                        <span class="black hidden-sm">new</span>
                                        <span class="red hidden-sm">hot</span>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/30.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                    <div class="new-sale">
                                        <span class="red hidden-sm">sale</span>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/31.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/32.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                    <div class="new-sale">
                                        <span class="red hidden-sm">hot</span>
                                    </div>    
                                </div>
                            </div>
                            <div class="col-xs-12 col-width">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/33.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$150</span>
                                                <span class="old-price">$180</span>
                                            </div> 
                                            <h3><a href="#">Electria Ostma</a></h3>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-width hidden-md hidden-sm">
                                <div class="single-product mb-30">
                                    <div class="single-product-item clearfix">
                                        <div class="single-product-img clearfix">
                                            <a href="#">
                                                <img class="primary-image" src="img/product/34.jpg" alt="">
                                            </a>
                                            <div class="wish-icon-hover text-center clearfix">
                                                <div class="hover-text">
                                                    <p>Duis autem vel eum iriure dolor in hendrerit in tate velit esse lestiesequat  </p>
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                        <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="single-product-info clearfix">
                                            <div class="pro-rating">  
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>  
                                            </div> 
                                            <div class="pro-price">
                                                <span class="new-price">$135</span>
                                                <span class="old-price">$145</span>
                                            </div> 
                                            <h3><a href="#">Peletria ostma</a></h3>  
                                        </div>
                                    </div>
                                    <div class="new-sale m-10">
                                        <span class="red hidden-sm">hot</span>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="list" class="tab-pane active" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="single-product shop-list mb-48">
                                        <div class="single-product-item clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4">
                                                    <div class="single-product-img clearfix">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="new-sale list">
                                                        <span class="black">new</span>
                                                        <span class="red">sale</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-8">
                                                    <div class="single-product-info mt-30 clearfix">
                                                        <h3><a href="#">Eletria postma</a></h3>
                                                        <div class="pro-rating">  
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span>1 Review(s)</span>
                                                        </div> 
                                                        <div class="pro-price">
                                                            <span class="new-price">$150</span>
                                                            <span class="old-price">$180</span>
                                                        </div> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris    nisi ut aliquip reprehenderit. </p> 
                                                    </div>
                                                    <div class="wish-icon-hover-list text-left clearfix">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul> 
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="single-product shop-list mb-48">
                                        <div class="single-product-item clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4">
                                                    <div class="single-product-img clearfix">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/product/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="new-sale list">
                                                        <span class="black">new</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-8">
                                                    <div class="single-product-info mt-20 clearfix">
                                                        <h3><a href="#">Eletria postma</a></h3>
                                                        <div class="pro-rating">  
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div> 
                                                        <div class="pro-price">
                                                            <span class="new-price">$150</span>
                                                            <span class="old-price">$180</span>
                                                        </div> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris    nisi ut aliquip reprehenderit. </p> 
                                                    </div>
                                                    <div class="wish-icon-hover-list text-left clearfix">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul> 
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="single-product shop-list mb-48">
                                        <div class="single-product-item clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4">
                                                    <div class="single-product-img clearfix">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/product/3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-8">
                                                    <div class="single-product-info mt-20 clearfix">
                                                        <h3><a href="#">Eletria postma</a></h3>
                                                        <div class="pro-rating">  
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div> 
                                                        <div class="pro-price">
                                                            <span class="new-price">$160</span>
                                                            <span class="old-price">$190</span>
                                                        </div> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris    nisi ut aliquip reprehenderit. </p> 
                                                    </div>
                                                    <div class="wish-icon-hover-list text-left clearfix">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul> 
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="single-product shop-list mb-48">
                                        <div class="single-product-item clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4">
                                                    <div class="single-product-img clearfix">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/product/4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="new-sale list">
                                                        <span class="black">new</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-8">
                                                    <div class="single-product-info mt-20 clearfix">
                                                        <h3><a href="#">Eletria postma</a></h3>
                                                        <div class="pro-rating">  
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div> 
                                                        <div class="pro-price">
                                                            <span class="new-price">$120</span>
                                                            <span class="old-price">$140</span>
                                                        </div> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris    nisi ut aliquip reprehenderit. </p> 
                                                    </div>
                                                    <div class="wish-icon-hover-list text-left clearfix">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul> 
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="single-product shop-list mb-48">
                                        <div class="single-product-item clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-4">
                                                    <div class="single-product-img clearfix">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/product/5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="new-sale list">
                                                        <span class="black">new</span>
                                                        <span class="red">sale</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-sm-8">
                                                    <div class="single-product-info mt-30 clearfix">
                                                        <h3><a href="#">Eletria postma</a></h3>
                                                        <div class="pro-rating">  
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <span>1 Review(s)</span>
                                                        </div> 
                                                        <div class="pro-price">
                                                            <span class="new-price">$150</span>
                                                            <span class="old-price">$180</span>
                                                        </div> 
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris    nisi ut aliquip reprehenderit. </p> 
                                                    </div>
                                                    <div class="wish-icon-hover-list text-left clearfix">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul> 
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>        
                                </div>      
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="shop-item-filter margin-none">
                        <div class="col-lg-3 col-md-2 col-sm-5 col-xs-5">
                            <div class="shop-tab clearfix">
                                <!-- Nav tabs -->
                                <ul role="tablist">
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="#grid"><i class="fa fa-th"></i></a></li>
                                    <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="list" class="list-view" href="#list"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                            </div>
                        </div>    
                        <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">      
                            <div class="filter-by">
                                <h4>Short by: </h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select>
                                          <option value="color">Position</option>
                                          <option value="name">Name</option>
                                          <option value="brand">Brand</option>
                                        </select> 
                                    </div>
                                </form>                             
                            </div>
                            <div class="filter-by">
                                <h4>Show: </h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select>
                                          <option value="10">12</option>
                                          <option value="20">16</option>
                                          <option value="30">20</option>
                                        </select> 
                                    </div>
                                </form> 
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-4 col-sm-7 col-xs-7">
                            <div class="page-menu float-right">     
                                <ul>
                                    <li class="li-page">page: </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="hidden-xs"><a href="#">3</a></li>
                                    <li class="hidden-md hidden-xs"><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="shop-left-sidebar">
                    <div class="single-left-widget">
                        <div class="section-title">
                            <h4 class="text-uppercase">category</h4>
                            <ul>
                                <li class="active"><a href="#"><i class="fa fa-angle-right"></i>Men's Collection (275)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Women's Collection (320)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Kid's Collection (275)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Accessories (220)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Bag's Collection (175)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Shoes Collection (150)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-left-widget">
                        <div class="section-title">
                            <h4 class="text-uppercase">materials</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Cotton (180)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Cotton Blends (150)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Lilen (120)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Polister Blends (175)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Jeans (150)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-left-widget">
                        <div class="section-title">
                            <h4 class="text-uppercase">brands</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Zara (150)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Walmart (100)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Arong (150)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Velloci (120)</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Dolce &amp; Gabbana (175)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-left-widget">
                        <div class="section-title">
                            <h4 class="text-uppercase">filter by price</h4>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                   <div class="slider-values">
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" /> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-left-widget">
                        <div class="section-title">
                            <h4 class="text-uppercase">filter by size</h4>
                            <ul class="size-widget">
                                <li class="active"><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">XL</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-left-widget">
                        <div class="section-title">
                            <h4 class="text-uppercase">filter by color</h4>
                            <ul class="color-widget">
                                <li class="active white"><a href="#"></a></li>
                                <li class="red"><a href="#"></a></li>
                                <li class="merun"><a href="#"></a></li>
                                <li class="megenta"><a href="#"></a></li>
                                <li class="blue"><a href="#"></a></li>
                                <li class="neviblue"><a href="#"></a></li>
                                <li class="green"><a href="#"></a></li>
                                <li class="yellow"><a href="#"></a></li>
                                <li class="purple"><a href="#"></a></li>
                                <li class="black"><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-left-widget">
                        <div class="section-title">
                            <h4 class="text-uppercase">tags</h4>
                            <ul class="widget-tag">
                                <li class="active"><a href="#">men</a></li>
                                <li><a href="#">kid's</a></li>
                                <li><a href="#">women</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">kid's</a></li>
                                <li><a href="#">men</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- shop end -->

<br><br><br><br><br>         
               
               <!-- footer start -->
               <footer class="footer-area">
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
                                               <p>Telephone :   </p>
                                           
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
                                           <li><a href="{{url('/')}}"><i class="fa fa-circle"></i>Home</a></li>
                                           <li><a href="{{url('customer_shop_grid')}}"><i class="fa fa-circle"></i>Catogories</a></li>
                                           <li><a href="{{url('customer_shop_grid')}}"><i class="fa fa-circle"></i>New Arrival</a></li>
                                           <li><a href="{{url('customer_contact')}}"><i class="fa fa-circle"></i>Contact Us</a></li>
                                       </ul>
                                   </div>  
                               </div>
                               <div class="col-md-2 col-sm-3 col-xs-12">
                               <div class="footer-widget">
                                       <h5 class="text-center">social links</h5>
                                       <div class="social-icons ">
                                      <ul>
                                          @foreach($sociallink as $social)
                                           <a href="{{$social->social_link}}" style="font-size: 40px;"><i class="fa fa-{{$social->name}}"></i></a>
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
                                       <p>Copyright @ 2019 <span><a href="#">Croydon</a></span>. All right reserved. </p>
                                   </div>
                               </div>
                               <div class="col-md-4 col-sm-6">
                                   <div class="footer-menu text-center">
                                       <nav>
                                           <ul>
                                               <li><a href="{{url('/')}}">Home</a></li>
                                               <li><a href="{{url('customer_contact')}}">Contat Us</a></li>
                                               <li class="hidden-md hidden-xs"><a href="{{url('customer_video_show')}}">Video</a></li>
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
               </footer>
               <!-- footer end -->  
       
           </div>
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

   </body>
</html>
