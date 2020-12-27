 @extends('layouts.portal')

@section('content')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <!-- shop start -->
                <div class="shop-area-start leftsidebar mt-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="shop-item-filter">
                                        <div class="col-lg-3 col-md-2 col-sm-5 col-xs-5">
                                            <div class="shop-tab clearfix">
                                                <!-- Nav tabs -->
                                                {{-- <ul role="tablist">
                                                    <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="{{url('shop_grid')}}"><i class="fa fa-th"></i></a></li>
                                                </ul> --}}
                                            </div>
                                        </div>    
                                        <div class="col-lg-5 col-md-6 hidden-sm hidden-xs">      
                                           {{--  <div class="filter-by">
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
                                            </div> --}}
                                        </div> 
                                        <div class="col-lg-4 col-md-4 col-sm-7 col-xs-7">
                                            {{-- <div class="page-menu float-right">     
                                                <ul>
                                                    <li class="li-page">Page: </li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li class="hidden-xs"><a href="#">3</a></li>
                                                    <li class="hidden-md hidden-xs"><a href="#">4</a></li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                </ul>
                                            </div> --}}
                                        </div>    
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="tab-content mt-25">
                                    <div id="grid" class="tab-pane active" role="tabpanel">
                                        <div class="row">
                                            @foreach($category->products as $product) 
                                            <div class="col-xs-12 col-width">
                                                <div class="single-product mb-30">
                                                    <div class="single-product-item clearfix">
                                                        <div class="single-product-img clearfix">
                                                            <a href="#">
                                                                <img class="primary-image" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="">
                                                            </a>
                                                            <div class="wish-icon-hover text-center clearfix">
                                                                <div class="hover-text">
                                                                    <p>  </p>
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
                                                           {{--  <div class="pro-rating">  
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>  
                                                            </div> --}} 
                                                            <div style="text-align: center; font-size: 16px;">
                                                                <span class="new-price"><strong><a href="{{url('product_detail')}}/{{$product->id}}">{{$product->product_name}}</a></strong><br></span>
                                                                    <span>{{$product->get_category['article']}}-{{$product->id}}</span>
                                                            </div> 
                                                            <h3 style="text-align: center;">Range: {{$product->price}}US$</h3>  
                                                        </div>
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div> 
                                @foreach($category->products as $product)
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
                            <div class="col-md-3">
                                <div class="shop-left-sidebar">
                                    <div class="single-left-widget">
                                        <div class="section-title">
                                            <h4 class="text-uppercase">category</h4>
                                            <ul>
                                                @foreach($categories as $category)
                                                <li class="active"><a href="{{ url('shop_grid') }}/{{$category->id}}"><i class="fa fa-angle-right"></i>{{ $category->name}} ({{$category->products->count()}})</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                   {{--  <div class="single-left-widget">
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
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop end -->


@endsection