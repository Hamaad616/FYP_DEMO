@extends('layouts.admin')




@section('content')

 <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard </h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Demographics</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                   
                    <!-- Column -->
                </div>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title">SITES VISITS</h5>
                                        <div id="visitfromworld" style="width:100%!important; height:415px"></div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="country-state slimscrollcountry">
                                            <li>
                                                <h2>6350</h2> <small>From India</small>
                                                <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%; height: 6px;"> <span class="sr-only">48% Complete</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <h2>3250</h2> <small>From UAE</small>
                                                <div class="pull-right">98% <i class="fa fa-level-up text-success"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:98%; height: 6px;"> <span class="sr-only">98% Complete</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <h2>1250</h2> <small>From Australia</small>
                                                <div class="pull-right">75% <i class="fa fa-level-down text-danger"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:75%; height: 6px;"> <span class="sr-only">75% Complete</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <h2>1350</h2> <small>From USA</small>
                                                <div class="pull-right">48% <i class="fa fa-level-up text-success"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:48%; height: 6px;"> <span class="sr-only">48% Complete</span></div>
                                                </div>
                                            </li>
                                            <li>
                                                <h2>350</h2> <small>From UK</small>
                                                <div class="pull-right">68% <i class="fa fa-level-down text-danger"></i></div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:68%; height: 6px;"> <span class="sr-only">48% Complete</span></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                                <div class="chart easy-pie-chart-2" data-percent="75"> <span class="percent">75</span>
                                                    <br/>
                                                    <h4>New Users Visits</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                                <div class="chart easy-pie-chart-1" data-percent="65"> <span class="percent">75</span>
                                                    <br/>
                                                    <h4>Returning Users</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12 m-t-20 text-center">
                                                <div class="chart easy-pie-chart-3" data-percent="25"> <span class="percent">75</span>
                                                    <br/>
                                                    <h4>Bounce Rate</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Campaign -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- End Campaign -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Info box -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Today's Schedule and sales overview -->
                <!-- ============================================================== -->
              
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Page Content -->
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
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->

        </body>



        
@endsection