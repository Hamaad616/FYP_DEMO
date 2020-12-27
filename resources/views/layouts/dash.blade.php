<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dash/assets/images/favicon.png')}}">
    <title>Croydon PVT Limited</title>
    <!-- This invoice page  -->
   
    <!-- This invoice page  -->
    <!-- Footable CSS -->
    <!-- page css -->

    <link href="{{ asset('dash/css/pages/footable-page.css')}}" rel="stylesheet">
    <link href="{{ asset('dash/assets/node_modules/footable/css/footable.core.css')}}" rel="stylesheet">
    <link href="{{ asset('dash/assets/node_modules/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <!-- chartist CSS -->
    <link href="{{ asset('dash/assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="{{ asset('dash/assets/node_modules/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dash/css/style.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dash/css/pages/contact-app-page.css')}}" rel="stylesheet">
    <link href="{{ asset('dash/css/pages/footable-page.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('dash/css/pages/dashboard1.css')}}" rel="stylesheet">
    <link href="{{ asset('dash/assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{ asset('dash/css/pages/ecommerce.css')}}" rel="stylesheet">

    <link href="{{ asset('dash/css/pages/floating-label.css')}}" rel="stylesheet">

    <link href="{{ asset('dash/css/pages/file-upload.css')}}" rel="stylesheet">

    <link href="{{ asset('dash/css/pages/dashboard2.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Welcome! admin</p>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('index_dash') }}">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('dash/assets/images/logo_3.png')}}" alt="homepage" class="dark-logo" width="70px" height="45px"/>
                            <!-- Light Logo icon -->
                            <img src="{{ asset('dash/assets/images/logo_3.png')}}" alt="homepage" class="light-logo"width="70px" height="45px"/>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{ asset('dash/assets/images/logo_2.png')}}" alt="homepage" class="dark-logo" width="134px" height="60px" style="margin-top: 11px"/>
                         <!-- Light Logo text -->    
                         <img src="{{ asset('dash/assets/images/logo_2.png')}}" class="light-logo" alt="homepage" width="134px" height="60px" style="margin-top: 11px" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                       {{--  <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="hidden-md-down">Zuraiz &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!- text->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!- text->
                                
                                <!- text->
                                <div class="dropdown-divider"></div>
                                <!- text->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!- text->
                                <div class="dropdown-divider"></div>
                                <!- text->
                                <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!- text->
                            </div>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class=" waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">{{ Auth::User()->name }}</span></a>
                        </li>
                        @foreach (Auth::User()->roles as $role) 
                        <li class="nav-small-cap"> Dashboard  
                                           {{ $role->name }}
                                    </li>
                                    @endforeach


                        @if(Auth::User()->hasRole('ceo'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Home <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('index_dash') }}">Home </a></li>
                                    <li><a href="{{ url('bulk') }}">Bulk Query</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('ceo'))                         
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Qualified Supplier</span></a>
                            <ul aria-expanded="false" class="collapse">
                               
                                 <li><a href="{{ url('suppliers/create') }}">Add Qualified Suppliers</a></li>
                                 <li><a href="{{ url('suppliers') }}">All Qualified Suppliers</a></li>   
                                 
                           </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('ceo'))
                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Employee Details</span></a>
                            <ul aria-expanded="false" class="collapse">
                                
                                 <li><a href="{{ url('employees') }}">Employee</a></li>
                                 <li><a href="{{ url('employees/create') }}">Add Employee</a></li>
                                
                           </ul>
                        </li>
                     @endif
                     @if(Auth::User()->hasRole('ceo'))
                                             <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Financial</span></a>
                            <ul aria-expanded="false" class="collapse">
                            
                                <li><a href="{{ url('inventory/create') }}">Add project </a></li>
                                <li><a href="{{ url('inventory') }}">All project Sale </a></li>
                            
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('ceo'))
                          <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                             
                                
                                <li><a href="{{ url('users') }}">All Users  </a></li>
                               
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('ceo'))
                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Vendors</span></a>
                            <ul aria-expanded="false" class="collapse">
                             
                                <li><a href="{{ url('vendor/create') }}">Add Vendors </a></li>
                                <li><a href="{{ url('vendor') }}">All Vendors  </a></li>
                               
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('ceo'))
                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Sales</span></a>
                            <ul aria-expanded="false" class="collapse">
                             
                                <li><a href="{{ url('sales/create') }}">Add Sales </a></li>
                                <li><a href="{{ url('sales') }}">All Sales  </a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('ceo'))
                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Purchases</span></a>
                            <ul aria-expanded="false" class="collapse">
                             
                                <li><a href="{{ url('purchase/create') }}">Add Purchases </a></li>
                                <li><a href="{{ url('purchase') }}">All Purchases  </a></li>
                               
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('ceo'))
                         <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Roles</span></a>
                            <ul aria-expanded="false" class="collapse">
                             
                                <li><a href="{{ url('roles/create') }}">Add Roles </a></li>
                                <li><a href="{{ url('add_employee_role') }}">Add Employee Role  </a></li>
                                <li><a href="{{ url('roles') }}">All Role </a></li>
                               
                            </ul>
                        </li>
                        @endif
                       <li> <a class="waves-effect waves-dark" href="{{route('logout')}}" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">Log Out</span></a></li>
                       @if(Auth::User()->hasRole('ceo'))
                            <li> <a class="waves-effect waves-dark" href="{{url('admin_index')}}" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">Admin Panel</span></a></li>
                       @endif
                       @if(Auth::User()->hasRole('ceo'))
                        <li> <a class="waves-effect waves-dark" href="{{url('CEO_web')}}" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">  Web portal</span></a></li> 
                        @endif                   
                   </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
       @yield('content')
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2018 Croydon PVT Limited.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   <script src="{{ asset('dash/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('dash/assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{ asset('dash/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dash/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dash/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dash/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dash/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('dash/assets/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('dash/assets/node_modules/morrisjs/morris.min.js')}}"></script>
    <script src="{{ asset('dash/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- Popup message jquery -->
    <script src="{{ asset('dash/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('dash/js/dashboard1.js')}}"></script>
    <script src="{{ asset('dash/assets/node_modules/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{ asset('dash/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    
    <!--Custom JavaScript -->
    <script src="{{ asset('dash/js/ecom-dashboard.js')}}"></script>
    <script src="{{ asset('dash/js/pages/jasny-bootstrap.js')}}"></script>

    <script src="{{ asset('dash/assets/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
     <!-- Date Picker Plugin JavaScript -->
    <script src="{{ asset('dash/assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>


     <!-- Footable -->
    <script src="{{ asset('dash/assets/node_modules/footable/js/footable.all.min.js')}}"></script>
    <!--FooTable init-->
    <script src="{{ asset('dash/js/pages/footable-init.js')}}"></script>




        
    <script>
     // Date Picker
    jQuery('.mydatepicker, #datepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    jQuery('#date-range').datepicker({
        toggleActive: true
    });
    jQuery('#datepicker-inline').datepicker({
        todayHighlight: true
    });
</script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });

    </script>

<script type="text/javascript">
    
    $('#example24').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });


        $(document).ready(function(){
    var i=1;
    $("#add_row").click(function(){b=i-1;
        $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
        $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
        i++; 
    });
    $("#delete_row").click(function(){
        if(i>1){
        $("#addr"+(i-1)).html('');
        i--;
        }
        calc();
    });
    
    $('#tab_logic tbody').on('keyup change',function(){
        calc();
    });
    $('#tax').on('keyup change',function(){
        calc_total();
    });
    

});

function calc()
{
    $('#tab_logic tbody tr').each(function(i, element) {
        var html = $(this).html();
        if(html!='')
        {
            var qty = $(this).find('.qty').val();
            var price = $(this).find('.price').val();
            $(this).find('.total').val(qty*price);
            
            calc_total();
        }
    });
}

function calc_total()
{
    total=0;
    $('.total').each(function() {
        total += parseInt($(this).val());
    });
    $('#sub_total').val(total.toFixed(2));
    tax_sum=total/100*$('#tax').val();
    $('#tax_amount').val(tax_sum.toFixed(2));
    $('#total_amount').val((tax_sum+total).toFixed(2));
}
    </script>

    <script>
function myFunction() {
  window.print();
}
</script>
    
</body>

</html>