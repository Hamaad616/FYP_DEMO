 @extends('layouts.portal')

@section('content')

 <!-- shop start -->
                <div class="shop-area mt-90">
                    <div class="container">
                        <div class="row">
                            <div class="shop-item-filter">
                                <div class="col-lg-4 col-md-3 col-sm-5 col-xs-5">
                                    <div class="shop-tab clearfix">
                                        <!-- Nav tabs -->
                                        <ul role="tablist">
                                            <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="{{url('shop_grid')}}"><i class="fa fa-th"></i></a></li>
                                        </ul>
                                    </div>
                                </div>    
                                <div class="col-lg-4 col-md-5 hidden-sm hidden-xs">      
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
                                            <li class="hidden-xs"><a href="#">4</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tab-content mt-25">
                            <div id="grid" class="tab-pane active" role="tabpanel">
                                <div class="row">
                                    <div class="col-xs-12 col-width">
                                        <div class="single-product mb-30">
                                            <div class="single-product-item clearfix">
                                                <div class="single-product-img clearfix">
                                                    <a href="#">
                                                        <img class="primary-image" src="portal/img/product/1.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/2.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/3.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/4.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/5.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/24.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/25.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/26.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/27.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/28.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/29.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/30.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/31.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/32.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/33.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/34.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/35.jpg" alt="">
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
                                                        <img class="primary-image" src="portal/img/product/36.jpg" alt="">
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
                                    <div class="col-xs-12 col-width hidden-sm">
                                        <div class="single-product mb-30">
                                            <div class="single-product-item clearfix">
                                                <div class="single-product-img clearfix">
                                                    <a href="#">
                                                        <img class="primary-image" src="portal/img/product/37.jpg" alt="">
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
                                    <div class="col-xs-12 col-width hidden-sm">
                                        <div class="single-product mb-30">
                                            <div class="single-product-item clearfix">
                                                <div class="single-product-img clearfix">
                                                    <a href="#">
                                                        <img class="primary-image" src="portal/img/product/38.jpg" alt="">
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
                                </div>
                            </div> 
                        </div> 
                        <div class="row">  
                            <div class="shop-item-filter mb-25">
                                <div class="col-lg-4 col-md-3 col-sm-5 col-xs-5">
                                    <div class="shop-tab clearfix">
                                        <!-- Nav tabs -->
                                        <ul role="tablist">
                                            <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="{{url('shop_grid')}}"><i class="fa fa-th"></i></a></li>
                                        </ul>
                                    </div>
                                </div>    
                                <div class="col-lg-4 col-md-5 hidden-sm hidden-xs">      
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
                                            <li class="hidden-xs"><a href="#">4</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </div>

                                </div>    
                            </div>
                        </div>  
                    </div>
                </div> 
                <!-- shop end -->  
@endsection