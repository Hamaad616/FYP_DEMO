@extends('layouts.admin')
@section('content')


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
                        <h4 class="text-themecolor">Bulk Query</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Bulk Query</li>
                            </ol>
                            <a href="{{url('bulk/create')}}"><button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button></a>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Invoice Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>

                                            <tr>
                                                <th>No</th>
                                                {{-- <th>Product Name</th> --}}
                                                 <th>Quantity</th>
                                                {{-- <th>Size</th>

                                                <th>Material</th> --}}
                                                <th>Per Piece Rate</th>
                                                <th>Time Limit</th>
                                                <th>Country</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                {{-- <th>Product Name</th> --}}
                                                <th>Quantity</th>
                                                {{-- <th>size</th>

                                                <th>Material</th> --}}
                                                <th>Per Piece Rate</th>
                                                <th>Time Limit</th>
                                                <th>Country</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php $x = 1; ?>
                                            @foreach($bulks as $bulk)
                                            <tr>
                                                <td>{{$x++}}</td>
                                                {{-- <td>{{$bulk->product_name}}</td> --}}

                                                {{-- <td>{{$bulk->size}}</td>
                                                <td>{{$bulk->color}}</td>
                                                <td>{{$bulk->material}}</td> --}}
                                                <td>{{$bulk->quantity}}</td>
                                                <td>{{$bulk->desire_amount}}</td>
                                                <td>{{$bulk->time_limit}}</td>
                                                <td>{{$bulk->country}}</td>

                                                <td>{{$bulk->message}}</td>
                                                <td>
                                                    <a href="{{ route('bulk.edit', $bulk->id)}}" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit">
                                                        <i class="ti-marker-alt"></i></a>

                                                <form method="post" style="display: inline-block;" action="{{ route('bulk.destroy', $bulk->id) }}">
                                                        {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE">
                                                 <button class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></button>
                                             </form>
                                             </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
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
@endsection
