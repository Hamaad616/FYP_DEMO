 @extends('layouts.portal')
 @if(session()->has('message'))
     <div style="text-align: center;"><strong><div class="alert alert-success">
         {{ session()->get('message') }}
     </div>
             </strong>
     </div>
 @endif
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>



<!--Start Product Details area  -->

                <div class="product-detail-area pt-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="zoomWrapper clearfix">

                                    <div id="img-1" class="zoomWrapper single-zoom pull-right">
                                        <a href="#">
                                            <img id="zoom1" src="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" data-zoom-image="{{ asset('uploads/' .$product->slug.'/'. $product->product_image) }}" alt="big-1">
                                        </a>
                                    </div>

                                    <div class="product-thumb">
                                        <ul class="p-details-slider" id="gallery_01">
                                          @foreach($product->images as $image)
                                            <li>
                                                <a class="elevatezoom-gallery" href="#" data-image="{{asset('uploads/'. $product->slug.'/'.  $image->filename)}}" data-zoom-image="{{asset('uploads/'. $product->slug.'/'.  $image->filename)}}"><img src="{{asset('uploads/'. $product->slug.'/'.  $image->filename)}}" alt=""></a>
                                            </li>
                                          @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="product-detail">
                                    <div class="product-title">
                                        <h4 style="font-size: 22px;">{{$product->product_name}} </h4><br>
                                        <h2>{{($product->currentPrice())}} US$</h2><br>
                                        <span >{{$product->get_category['article']}}-{{$product->id}}</span>
                                    </div>
                                    <h3><strong>Description</strong></h3>
                                    <p class="detail">{{$product->description}} </p>

                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart" action="{{route('cart.store')}}">
                                            {{csrf_field()}}
                                            {{--                                                                        <div class="numbers-row">--}}
                                            {{--                                                                            <input type="number" id="french-hens" value="3">--}}
                                            {{--                                                                        </div>--}}
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <input type="hidden" name="name" value="{{$product->product_name}}">
                                            <input type="hidden" name="price" value="{{$product->currentPrice()}}">
                                            <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                        </form>
                                    </div>

{{--                                    <button type="button" id="mymodal" class="btn btn-primary" data-toggle="modal" data-target="#myModal">--}}
{{--                                      Bulk Query--}}
{{--                                    </button>--}}

{{--<!-- Modal -->--}}
{{--<div class="modal fade " id="myModal" tabindex="-1" role="dialog">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--          <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--              <h5 class="modal-title">Bulk Query</h5>--}}
{{--              <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                <span aria-hidden="true">&times;</span>--}}
{{--              </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body form-horizontal">--}}
{{--            <!-- form -->--}}
{{--              <form class="form-horizontal" role="form" method="post" action="{{URL ('bulk')}}">--}}
{{--                {{csrf_field()}}--}}
{{--                <div class="form-group">--}}

{{--                  @foreach($variants as $variant)--}}

{{--                  <div class="form-group">--}}
{{--                      <label for="variant" class="control-label col-xs-2">Select {{ $variant->name }}</label>--}}
{{--                       <div class="col-xs-10">--}}
{{--                      <input  class="form-control" id="title"  type="hidden" name="variants[]" value="{{ $variant->name }}">--}}
{{--                    </div>--}}
{{--                      <div class="col-xs-10">--}}

{{--                          <select name="{{ strtolower($variant->name) }}" class="form-control" data-placeholder="Choose a Category" tabindex="1">--}}
{{--                              @foreach($variant->variant_values as $value)--}}
{{--                                  <option value="{{ $value->id }}">{{$value->name}}</option>--}}
{{--                              @endforeach--}}
{{--                          </select>--}}
{{--                      </div>--}}
{{--                    </div>--}}


{{--                  @endforeach--}}

{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                  <label for="quantity" class="control-label col-xs-2">Quantity</label>--}}
{{--                  <div class="col-xs-10">--}}
{{--                    <input name="quantity" type="text" class="form-control" id="title" placeholder="Enter your Quantity of Product">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                  <label for="desire_amount" class="control-label col-xs-2">Desire Amount</label>--}}
{{--                  <div class="col-xs-10">--}}
{{--                    <input type="text" name="desire_amount" class="form-control" id="title" placeholder="Please Enter Per Piece in dollars">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                  <label for="time_limit" class="control-label col-xs-2">Time Limit </label>--}}
{{--                  <div class="col-xs-10">--}}
{{--                    <input type="text" name="time_limit" class="form-control" id="title" placeholder="e.g 4 Months">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                  <label for="country" class="control-label col-xs-2">Country</label>--}}
{{--                  <div class="col-xs-10">--}}
{{--                    <input type="text" name="country" class="form-control" id="title" placeholder="Enter your Country">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                  <label for="email" class="control-label col-xs-2">Email</label>--}}
{{--                  <div class="col-xs-10">--}}
{{--                    <input type="text" name="email" class="form-control" id="timezone" placeholder="Enter your Email">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                  <label for="phone" class="control-label col-xs-2">Phone</label>--}}
{{--                  <div class="col-xs-10">--}}
{{--                    <input type="text" name="phone" class="form-control" id="timezone" placeholder="Enter your Contact Number">--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                  <label for="message" class="control-label col-xs-2">Message</label>--}}
{{--                  <div class="col-xs-10">--}}
{{--                    <textarea class="form-control" name="message" id="message" placeholder="Enter your Message"></textarea>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                  <button type="submit" class="btn btn-primary">Send</button>--}}
{{--                  <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                </div>--}}
{{--              </form>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        {{-- <div class="row">
                            <div class="col-xs-12">
                                <div class="product-description-tab pt-50">
                                    <div class="description-tab-menu section-tab-menu pb-30">
                                        <ul class="clearfix" role="tablist">
                                            <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a></li>
                                      </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="description">
                                           <p>{{$product->description}}</p>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!--End Product Details area  -->
                <!-- arrival start-->
                <div class="arrival-area related clearfix mt-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section-tab">
                                    <div class="section-tab-menu text-center mb-45">
                                        <ul role="tablist">
                                            <li class="text-uppercase active"><a href="#"> Related Product</a></li>
                                        </ul>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="tab-item-slider">
                                        @foreach($products as $product)
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
                                                                <h3 style="text-align: center;">Range: {{$product->price}}US$</h3>
                                                            </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                                     <form method="post" class="cart" action="{{route('cart.store')}}">
                                                                         {{csrf_field()}}
{{--                                                                        <div class="numbers-row">--}}
{{--                                                                            <input type="number" id="french-hens" value="3">--}}
{{--                                                                        </div>--}}
                                                                         <input type="hidden" name="id" value="{{$product->id}}">
                                                                         <input type="hidden" name="name" value="{{$product->name}}">
                                                                         <input type="hidden" name="price" value="{{$product->price}}">
                                                                        <button class="single-add-to-cart-button" type="submit">Add to cart</button>
                                                                    </form>
                                                                </div>
                                                                <div class="quick-desc">
                                                                    {{ $product->description }}
                                                                </div>
                                                                <div class="social-sharing">
                                                                    <div class="widget social-sharing">
                                                                        @foreach($product->variants as $variant)
                                                                            {{ $variant->variant_values}}
                                                                                <select class="custom-select">
                                                                                    <option selected>Select {{ $variant->name }}</option>
                                                                                    @foreach($variant->variant_values as $value)
                                                                                        <option value="{{ $value->id }}">{{$value->name}}</option>
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
<!-- arrival end -->
@endsection
