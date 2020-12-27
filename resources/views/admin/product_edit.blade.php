@extends('layouts.admin')

@section('content')

<!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            @if(session()->has('success'))

  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {{session()->get('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Products Edit</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Products Edit</li>
                            </ol>
                            <a href="#"><button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button> </a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="{{ url('product', $product->id) }}" enctype="multipart/form-data"> 
                                    <input type="hidden" name="_method" value="PUT">
                                    {{ csrf_field() }}
                                    <div class="form-body">
                                        <h5 class="card-title">About Product</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group" >
                                                    
                                                    <label class="control-label">Product Name</label>
                                                    <input type="text" id="firstName" name="product_name" class="form-control" placeholder="Name" value="{{$product->product_name}}"> </div>
                                            </div>
                                            <!--/span-->
                                            
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Category</label>
                                                    <select name="category" class="form-control" data-placeholder="Choose a Category" tabindex="1">
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <br/>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="publish" type="radio" id="customRadioInline1" name="customRadioInline1" value="{{$product->status}}" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline1">Publish</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <br/>
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="new" type="checkbox" value="{{$product->new}}" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">New Arrival</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="feature" value="{{$product->feature}}" type="checkbox" class="custom-control-input" id="customCheck2">
                                                        <label class="custom-control-label" for="customCheck2">Feature</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input name="sale" value="{{$product->sale}}" type="checkbox" class="custom-control-input" id="customCheck3">
                                                        <label class="custom-control-label" for="customCheck3">Sales</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                        </div>
                                                        <input name="price" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1" value="{{$product->price}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Discount</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon2"><i class="ti-cut"></i></span>
                                                        </div>
                                                        <input name="discount" type="text" class="form-control" placeholder="Discount" aria-label="Discount" aria-describedby="basic-addon2" value="{{$product->discount}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <br><hr>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form method="post" action="{{url('variant')}}">
                                                            <div class="form-body">
                                                                @foreach($variants as $variant)
                                                                <div>
                                                                <h5 class="card-title">Select {{ $variant->name }} </h5>
                                                                <hr>
                                                                <div class="row">
                                                                    <input type="hidden" name="variants[]" value="{{ $variant->id }}-{{ strtolower($variant->name)}}s">
                                                                    @foreach($values as $value)
                                                                    @if($value->variant_id == $variant->id)
                                                                    <div class="col-md-6">

                                                                        <div id="listResults">
                                                                          <div class="col-xs-12">
                                                                            <div class="col-xs-2 text-center"> 
                                                                            </div>
                                                                          </div>
                                                                          <div class="col-xs-12">
                                                                            <div class="icheck-material-grey">
                                                                                <input type="checkbox" checked id="{{ strtolower($value->name)}}" value="{{ $value->id}}" name="{{strtolower($variant->name)}}s[]" />
                                                                                <label for="{{ strtolower($value->name)}}">{{ $value->name}}</label>
                                                                            </div><br>
                                                                            
                                                                          </div>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                    @endforeach
                                                                    <!-- column -->
                                                                 </div><br><hr>
                                                             </div>
                                                             @endforeach
                                                         </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Column -->
                                                </div>
                                            <!--/span-->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Product Description</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                        </div>
                                                        <input name="description" value="{{$product->description}}" type="text" class="form-control" placeholder="Description" aria-label="description" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5 class="card-title m-t-20">Upload Image</h5>
                                                <div class="product-img"> <img src="{{asset('uploads/'. $product->product_image)}}">
                                                    <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div>
                                                    <br/>
                                                    <div class="fileupload btn btn-info waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Anonther Image</span>
                                                        <input type="file" name="filename" class="upload"> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h5 class="card-title m-t-20">Upload Gallery Image</h5>
                                                <div class="product-img"> <img src="{{asset('uploads/'. $product->image)}}">
                                                    <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div>
                                                    <br/>
                                                    <div class="fileupload btn btn-info waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Anonther Image</span>
                                                        <input type="file" name="images[]" class="upload"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <h5 class="card-title m-t-20">Upload Gallery Image</h5>
                                                <div class="product-img"> <img src="{{asset('uploads/'. $product->image)}}">
                                                    <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div>
                                                    <br/>
                                                    <div class="fileupload btn btn-info waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Anonther Image</span>
                                                        <input type="file" name="images[]" class="upload"> </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <h5 class="card-title m-t-20">Upload Gallery Image</h5>
                                                <div class="product-img"> <img src="{{asset('uploads/'. $product->image)}}">
                                                    <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div>
                                                    <br/>
                                                    <div class="fileupload btn btn-info waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Anonther Image</span>
                                                        <input type="file" name="images[]" class="upload"> </div>
                                                </div>
                                            </div>
                                        </div>
                                         

                                    <div class="form-actions m-t-40">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                                        <button type="button" class="btn btn-dark">Cancel</button>
                                    </div>
                                     </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->

@endsection

