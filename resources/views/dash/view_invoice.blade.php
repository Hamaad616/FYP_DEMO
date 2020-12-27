@extends('layouts.dash')


@section('content')
{{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 --}}<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style type="text/css">
.invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
.pull-right{
    margin-left: 800px;
}
.receiver{
    margin-left: 40px;
}
.sender{
    margin-left: 705px;
}
.order_date{
    margin-left: 780px;
}
.company_email{
    margin-left: 40PX
}
</style>
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
                        <h4 class="text-themecolor">Sales Invoice</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Sales Invoice</li>
                            </ol>
                            <a href="{{url('sales/create')}}"></a><button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                
               
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="invoice-title">
                                <h2>Invoice</h2><h3 class="pull-right">Order # 12345</h3>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="receiver col-xs-6">
                                    <address>
                                    <strong>Sender's Address:</strong><br>
                                        Croydon International<br>
                                        Brush Street, <br>Small Industrial Estate, <br>
                                        Shahabpura, Sialkot
                                    </address>
                                </div>
                                <div class="sender col-xs-6 text-right">
                                    <address>
                                    <strong>Receiver's Address:</strong><br>
                                        {{$sale->vendor->company}}<br>
                                        {{$sale->vendor->plot_number}}<br>
                                        {{$sale->vendor->street_number}}<br>
                                        {{$sale->vendor->sector}}
                                    </address>
                                </div>
                            </div>
                            <div class="row">
                                <div class="company_email col-xs-6">
                                    <address>
                                        info@croydon.com.pk
                                    </address>
                                </div>
                                <div class="order_date col-xs-6 text-right">
                                    <address>
                                        <strong>Order Date:</strong><br>
                                        {{$sale->created_at}}<br><br>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Invoice Details</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <td><strong>Product Name</strong></td>
                                                    <td class="text-center"><strong>Size</strong></td>
                                                    <td class="text-center"><strong>Color</strong></td>
                                                    <td class="text-center"><strong>Material</strong></td>
                                                    <td class="text-center"><strong>Price</strong></td>
                                                    <td class="text-center"><strong>No. of Products</strong></td>
                                                    <td class="text-right"><strong>Total</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                @foreach($sale->sale_products as $sale_product)
                                                <tr>
                                                    <td>{{$sale_product->product->product_name}}</td>
                                                    <td class="text-center">{{$sale_product->sizes->name}}</td>
                                                    <td class="text-center">{{$sale_product->colors->name}}</td>
                                                    <td class="text-right">{{$sale_product->materials->name}}</td>
                                                    <td class="text-right">{{$sale_product->per_item_price}}</td>
                                                    <td class="text-right">{{$sale_product->noproducts}}</td>
                                                    <td class="text-right">{{$sale_product->per_item_price * $sale_product->noproducts }}</td>
                                                </tr>
                                                @endforeach
                                                
                                                {{-- <tr>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                                    <td class="thick-line text-right">$670.99</td>
                                                </tr> --}}
                                               {{--  <tr>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    <td class="no-line"></td>
                                                    
                                                    <td class="no-line text-center"><strong>Shipping</strong></td>
                                                    <td class="no-line text-right">$15</td>
                                                </tr> --}}
                                                <tr>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    <td class="thick-line"></td>
                                                    
                                                    <td class="thick-line text-center"><strong>Total</strong></td>
                                                    <td class="thick-line text-right">{{ $sale->price }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="print" onclick="myFunction()" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>



                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
               


                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>

<script>
function myFunction() {
  window.print();
}
</script>
@endsection