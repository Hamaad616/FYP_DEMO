@extends('layouts.portal')

@section('content')
 <!-- jQuery first, then Popper.js and Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <!-- slider start -->
                <div class="slider-wrap">
                    <div class="preview-2">
                        <div id="nivoslider" class="slides">
                         @foreach($sliders as $slider)
                             <img src="{{ asset('uploads/' . $slider->filename) }}" alt="" title="#slider-direction-{{ $slider->id }}"  />
                        @endforeach
                        </div>
                        <!-- direction 1 -->
                        @foreach($sliders as $slider)
                        <div id="slider-direction-{{ $slider->id }}" class="slider-direction">
                            <div class="banner-content">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="nivo_text">
                                                <div class="nivo_text-wrapper">

                                                    <div class="slider-content slider-text-2 text-left hidden-xs">
                                                        <div class="wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.3s">

                                                            <h1>{{$slider->heading}} </h1>
                                                        </div>
                                                    </div>

                                                    <div class="slider-content slider-text-4 text-left hidden-sm hidden-xs">
                                                        <div class="wow bounceInUp" data-wow-duration="3s" data-wow-delay="1s">
                                                            <a href="{{url('shop_grid')}}" class="slider-button">View Product</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- direction 2 -->

                    </div>
                </div>
                <!-- slider end -->

                <!-- arrival start-->
                <div class="arrival-area clearfix pt-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section-tab">
                                    <div class="section-tab-menu text-center mb-45">
                                        <ul role="tablist">
                                            <li role="presentation" class="active text-uppercase"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">New Arrival</a></li>
                                            <li role="presentation" class="text-uppercase"><a href="#featured" aria-controls="featured" role="tab" data-toggle="tab">Featured</a></li>
                                            <li role="presentation" class="text-uppercase"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">Best Selling</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="tab-content row">
                                        <div id="new" role="tabpanel" class="active section-tab-item">
                                            <div class="tab-item-slider">
                                                @foreach($new_arrivals as $product)
                                                <div class="col-xs-12 col-width">
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p></p>
                                                                        <ul>
                                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                                            <li><a class="modal-view" href="#productModal-{{ $product->id}}" data-toggle="modal" data-target="#productModal-{{ $product->id}}"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                {{-- <div class="pro-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>  --}}
                                                                <div style="text-align: center; font-size: 16px;">
                                                                    <span class="new-price"><strong><a href="{{url('product_detail')}}/{{$product->id}}">{{$product->product_name}}</a></strong><br></span>
                                                                    <span>{{$product->get_category['article']}}-{{$product->id}}</span>
                                                                </div>
                                                                <h3 style="text-align: center;">Range: {{$product->price}}US$</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- QUICKVIEW PRODUCT -->

                                                <!-- END QUICKVIEW PRODUCT -->
                                                @endforeach
                                            </div>
                                        </div>
                                        @foreach($new_arrivals as $product)
                                        <div id="quickview-wrapper">
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="productModal-{{ $product->id}}" tabindex="0" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="modal-product">
                                                                        <div class="product-images">
                                                                            <div class="main-image images">
                                                                                <img alt="" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}">
                                                                            </div>
                                                                        </div><!-- .product-images -->

                                                                        <div class="product-info">
                                                                            <h1>{{ $product->product_name }}</h1>
                                                                            <div class="price-box">
                                                                                <p class="price"><span class="special-price"><span class="amount">${{ $product->price }} </span></span></p>
                                                                            </div>
                                                                            <a href="{{url('product_detail')}}/{{$product->id}}" class="see-all">See all features</a>
                                                                            <div class="quick-add-to-cart">
                                                                                {{-- <form method="post" class="cart">
                                                                                    <div class="numbers-row">
                                                                                        <input type="number" id="french-hens" value="3">
                                                                                    </div>
                                                                                    <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                                                                </form> --}}
                                                                            </div>
                                                                            <div class="quick-desc">
                                                                                {{ $product->description }}
                                                                            </div>
                                                                            <div class="social-sharing">
                                                                                <div class="widget widget_socialsharing_widget">
                                                                                     {{-- @foreach($product->variants as $variant)
                                                                                     <select class="custom-select">

                                                                                <option selected>Select {{ $variant->name }}</option>
                                                                                @foreach($variant->values as $value)
                                                                                @if($variant->id == $value->variant_id)
                                                                                <option>{{ $value->name }}</option>
                                                                                @endif
                                                                                @endforeach
                                                                            </select>
                                                                            @endforeach --}}

                                                                                </div>
                                                                            </div>
                                                                        </div><!-- .product-info -->
                                                                    </div><!-- .modal-product -->
                                                                </div><!-- .modal-body -->
                                                            </div><!-- .modal-content -->
                                                        </div><!-- .modal-dialog -->
                                                    </div>
                                                    <!-- END Modal -->
                                                </div>
                                        @endforeach
                                        <div id="featured" role="tabpanel" class="section-tab-item">
                                            <div class="tab-item-slider">
                                                @foreach($features as $product)
                                                <div class="col-xs-12 col-width">
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p> </p>
                                                                        <ul>
                                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                                            <li><a class="modal-view" href="#productModal-{{ $product->id}}" data-toggle="modal" data-target="#productModal-{{ $product->id}}"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                {{-- <div class="pro-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>  --}}
                                                                <div style="text-align: center; font-size: 16px;">
                                                                    <span class="new-price"><strong><a href="{{url('product_detail')}}/{{$product->id}}">{{$product->product_name}}</a></strong><br></span>
                                                                    <span>{{$product->get_category['article']}}-{{$product->id}}</span>
                                                                </div>
                                                                <h3 style="text-align: center;">Range: {{$product->price}} US$</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- QUICKVIEW PRODUCT -->

                                                <!-- END QUICKVIEW PRODUCT -->
                                                @endforeach
                                            </div>
                                        </div>
                                        @foreach($features as $product)
                                        <div id="quickview-wrapper">
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="productModal-{{ $product->id}}" tabindex="0" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="modal-product">
                                                                        <div class="product-images">
                                                                            <div class="main-image images">
                                                                                <img alt="" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}">
                                                                            </div>
                                                                        </div><!-- .product-images -->

                                                                        <div class="product-info">
                                                                            <h1>{{ $product->product_name }}</h1>
                                                                            <div class="price-box">
                                                                                <p class="price"><span class="special-price"><span class="amount">${{ $product->price }} </span></span></p>
                                                                            </div>
                                                                            <a href="{{url('product_detail')}}/{{$product->id}}" class="see-all">See all features</a>
                                                                            <div class="quick-add-to-cart">
                                                                                {{-- <form method="post" class="cart">
                                                                                    <div class="numbers-row">
                                                                                        <input type="number" id="french-hens" value="3">
                                                                                    </div>
                                                                                    <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                                                                </form> --}}
                                                                            </div>
                                                                            <div class="quick-desc">
                                                                                {{ $product->description }}/{{$product->variants}}
                                                                            </div>
                                                                            <div class="social-sharing">
                                                                                <div class="widget widget_socialsharing_widget">
                                                                                     @foreach($product->variants as $variant)
                                                                                    {{ $variant->variant_values}}

                                                                                     <select class="custom-select">

                                                                                <option selected>Select {{ $variant->name }}</option>
                                                                                    @foreach($variant->variant_values as $value)
                                                                                    @endforeach
                                                                            </select>
                                                                            @endforeach

                                                                                </div>
                                                                            </div>
                                                                        </div><!-- .product-info -->
                                                                    </div><!-- .modal-product -->
                                                                </div><!-- .modal-body -->
                                                            </div><!-- .modal-content -->
                                                        </div><!-- .modal-dialog -->
                                                    </div>
                                                    <!-- END Modal -->
                                                </div>
                                        @endforeach
                                        <div id="best" role="tabpanel" class="section-tab-item">
                                            <div class="tab-item-slider">
                                                @foreach($sales as $product)
                                                <div class="col-xs-12 col-width">
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="product">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p> </p>
                                                                        <ul>
                                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                                            <li><a class="modal-view" href="#productModal-{{ $product->id}}" data-toggle="modal" data-target="#productModal-{{ $product->id}}"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                {{-- <div class="pro-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>  --}}
                                                                <div style="text-align: center; font-size: 16px;">
                                                                    <span class="new-price"><strong><a href="{{url('product_detail')}}/{{$product->id}}">{{$product->product_name}}</a></strong><br></span>
                                                                    <span>{{$product->get_category['article']}}-{{$product->id}}</span>
                                                                </div>
                                                                <h3 style="text-align: center;">Range: {{$product->price}} US$</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- QUICKVIEW PRODUCT -->

                                                <!-- END QUICKVIEW PRODUCT -->
                                                @endforeach
                                            </div>
                                        </div>
                                        @foreach($sales as $product)
                                        <div id="quickview-wrapper">
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="productModal-{{ $product->id}}" tabindex="0" role="dialog">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="modal-product">
                                                                        <div class="product-images">
                                                                            <div class="main-image images">
                                                                                <img alt="" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}">
                                                                            </div>
                                                                        </div><!-- .product-images -->

                                                                        <div class="product-info">
                                                                            <h1>{{ $product->product_name }}</h1>
                                                                            <div class="price-box">
                                                                                <p class="price"><span class="special-price"><span class="amount">${{ $product->price }} </span></span></p>
                                                                            </div>
                                                                            <a href="{{url('product_detail')}}/{{$product->id}}" class="see-all">See all features</a>
                                                                            <div class="quick-add-to-cart">
                                                                                {{-- <form method="post" class="cart">
                                                                                    <div class="numbers-row">
                                                                                        <input type="number" id="french-hens" value="3">
                                                                                    </div>
                                                                                    <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                                                                </form> --}}
                                                                            </div>
                                                                            <div class="quick-desc">
                                                                                {{ $product->description }}/{{$product->variants}}
                                                                            </div>
                                                                            <div class="social-sharing">
                                                                                <div class="widget widget_socialsharing_widget">
                                                                                     @foreach($product->variants as $variant)
                                                                                    {{ $variant->variant_values}}

                                                                                     <select class="custom-select">

                                                                                <option selected>Select {{ $variant->name }}</option>
                                                                                    @foreach($variant->variant_values as $value)
                                                                                    @endforeach
                                                                            </select>
                                                                            @endforeach

                                                                                </div>
                                                                            </div>
                                                                        </div><!-- .product-info -->
                                                                    </div><!-- .modal-product -->
                                                                </div><!-- .modal-body -->
                                                            </div><!-- .modal-content -->
                                                        </div><!-- .modal-dialog -->
                                                    </div>
                                                    <!-- END Modal -->
                                                </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="arrival-button text-center mt-30">
                                    <a href="{{url('shop_grid')}}" class='section-button'>View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- arrival end -->


                <!-- collection area start -->
               <!-- men area start -->
                <div class="men-area ptb-90">
                    <div class="container">
                        @foreach($categories->chunk(3) as $chunk)
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section-tab">
                                    <div class="section-tab-menu mb-45 text-center">
                                        <br>
                                        <ul role="tablist">
                                            @foreach($chunk as $category)
                                            <li role="presentation" class="active text-uppercase"><a href="#{{$category->id}}" aria-controls="{{$category->id}}" role="tab" data-toggle="tab">{{$category->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 hidden-sm hidden-xs">
                                <div class="featured-left mt-2">
                                    <a href="#">
                                        <img src="{{asset('portal/img/product/category.jpg')}}" alt="">
                                        <div class="feature-info text-left">
                                            <h2 class="text-uppercase">Croydon</h2>
                                            <h3 class="text-uppercase">Collection</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="clearfix"></div>
                                <div class="tab-content row">
                                    @foreach($chunk as $category)
                                        <div id="{{$category->id}}" role="tabpanel" class="@if($loop->first) active @endif section-tab-item">
                                            <div class="feature-slider">
                                                @foreach($category->products as $product)
                                                <div class="col-xs-12 col-width">
                                                    <div class="single-product">
                                                        <div class="single-product-item clearfix">
                                                            <div class="single-product-img clearfix">
                                                                <a href="#">
                                                                    <img class="primary-image" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="">
                                                                </a>
                                                                <div class="wish-icon-hover text-center clearfix">
                                                                    <div class="hover-text">
                                                                        <p class="hidden-md"> </p>
                                                                        <ul>
                                                                            <li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                                            <li><a class="modal-view" href="#productModal-{{$product->id}}" data-toggle="modal" data-target="#productModal-{{$product->id}}"><i class="fa fa-eye"></i></a></li>
                                                                            <li class="hidden-md"><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="single-product-info clearfix">
                                                                {{-- <div class="pro-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>  --}}
                                                                <div style="text-align: center; font-size: 16px;">
                                                                    <span class="new-price"><strong><a href="{{url('product_detail')}}/{{$product->id}}">{{$product->product_name}}</a></strong><br></span>
                                                                    <span>{{$product->get_category['article']}}-{{$product->id}}</span>
                                                                </div>
                                                                <h3 style="text-align: center;"><span>Range: {{$product->price}} US$</span><br></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="arrival-button text-center mt-30">
                                    <a href="{{url('shop_grid')}}" class='section-button'>View More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- men area end -->



@endsection
