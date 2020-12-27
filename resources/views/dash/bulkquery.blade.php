@extends('layouts.dash')


@section('content')
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
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Product Design</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- Campaign -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Customers List</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Supplier Name</th>
                                                <th>Quantity</th>
                                                <th>Type</th>
                                                <th>Deadline</th>
                                                <th>Within Country</th>
                                                <th>Outside Country</th>
                                                <th>Approval</th>
                                                <th>Decline</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="javascript:void(0)">Javed</a>
                                                </td>
                                                <td>23</td>
                                                <td>Leather</td>
                                                <td><span>12-08-2018</span> </td>
                                                <td><span class="label label-danger"></span></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href="javascript:void(0)">Ahmad</a>
                                                </td>
                                                <td>26</td>
                                                <td>Wool</td>
                                                <td><span>10-09-2018</span> </td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <a href="javascript:void(0)">Jamil</a>
                                                </td>
                                                <td>34</td>
                                                <td>Nylon</td>
                                                <td><span>1-10-2018</span></td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <a href="javascript:void(0)">Hamza</a>
                                                </td>
                                                <td>25</td>
                                                <td>Ramie</td>
                                                <td><span >2-10-2018</span></td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <a href="javascript:void(0)">Ibrahim</a>
                                                </td>
                                                <td>23</td>
                                                <td>Cotton</td>
                                                <td><span>10-9-2018</span></td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <a href="javascript:void(0)">Saud</a>
                                                </td>
                                                <td>29</td>
                                                <td>Thermoplastic</td>
                                                <td><span>10-5-2018</span></td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <a href="javascript:void(0)">Ramiz</a>
                                                </td>
                                                <td>35</td>
                                                <td>Fur</td>
                                                <td><span>05-10-2018</span></td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <a href="javascript:void(0)">Salman</a>
                                                </td>
                                                <td>23</td>
                                                <td>Leather</td>
                                                <td><span>11-10-2018</span></td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <a href="javascript:void(0)">Saad</a>
                                                </td>
                                                <td>18</td>
                                                <td>Wool</td>
                                                <td><span >12-5-2018</span></td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>
                                                    <a href="javascript:void(0)">Saif</a>
                                                </td>
                                                <td>36</td>
                                                <td>Cotton</td>
                                                <td><span>18-5-2018</span></td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>
                                                    <a href="javascript:void(0)">Waheed</a>
                                                </td>
                                                <td>43</td>
                                                <td>Fur</td>
                                                <td><span>12-10-2018</span></td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>
                                                    <a href="javascript:void(0)">Daud</a>
                                                </td>
                                                <td>23</td>
                                                <td>Leather</td>
                                                <td><span >12-10-2018</span> </td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>
                                                    <a href="javascript:void(0)">Amjad</a>
                                                </td>
                                                <td>26</td>
                                                <td>Wool</td>
                                                <td><span>10-09-2018</span> </td>
                                                <td><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>
                                                    <a href="javascript:void(0)">Kashif</a>
                                                </td>
                                                <td>28</td>
                                                <td>Fur</td>
                                                <td><span>1-10-2013</span></td>
                                                <td><span class="label label-danger"><span class="label label-danger"></td>
                                                <td><span class="label label-danger"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Customer</button>
                                                </td>
                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myModalLabel">Add New Customer</h4> </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Type name"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Quantity"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Type"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Deadline"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Within Country"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Outside Country"> </div>
                                                                    </div>
                                                                </from>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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