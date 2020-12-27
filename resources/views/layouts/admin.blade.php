<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png')}}">

            <title>{{config('app.name' , 'Admin Panel')}}</title>
            <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- chartist CSS -->

    <link href="{{ asset('assets/node_modules/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{ asset('css/pages/ecommerce.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.min.css')}}"rel="stylesheet">


    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

    <!-- demographic page CSS -->

      <!-- Dashboard 31 Page CSS -->
    <link href="{{ asset('css/pages/dashboard3.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/node_modules/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!--c3 CSS -->
    <link href="{{ asset('css/pages/easy-pie-chart.css')}}" rel="stylesheet">
    <link href="{{ asset('css/pages/contact-app-page.css')}}" rel="stylesheet">
    <link href="{{ asset('css/pages/footable-page.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css')}}" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('css/pages/dashboard2.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/assets/css/icheck-material.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css'  )}}">


    <!-- demographic page CSS -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
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
                    <a class="navbar-brand" href="{{ url('admin_index') }}">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('assets/images/logo_3.png')}}" alt="homepage" class="dark-logo" width="70px" height="45px"/>
                            <!-- Light Logo icon -->
                            <img src="{{ asset('assets/images/logo_3.png')}}" alt="homepage" class="light-logo" width="70px" height="45px" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="{{ asset('assets/images/logo_2.png')}}" alt="homepage" class="dark-logo" width="130px" height="48px" style="margin-top: 10px">

                         <!-- Light Logo text -->
                         <img src="{{ asset('assets/images/logo_2.png')}}" class="light-logo" alt="homepage" width="80px" height="55px"/></span> </a>
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

                        <li>


                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End mega menu -->
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
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">

                        <div class="dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    @foreach (Auth::User()->roles as $role)
                        <li style="font-size : 150%; " class="nav-small-cap"><span> {{ $role->name }}</span> Panel</li>
                                    @endforeach
                        @if(Auth::User()->hasRole('Admin')||Auth::User()->hasRole('CEO'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Home <span class="badge badge-pill badge-cyan ml-auto">6</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('admin_index') }}">Home </a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('Admin')||Auth::User()->hasRole('CEO'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Variants<span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('variant/create') }}">Add Variant</a></li>
                                <li><a href="{{ url('variant_value/create') }}">Add Variant Value</a></li>
                                <li><a href="{{ url('variant') }}">All Variant</a></li>
                                <li><a href="{{ url('variant_value') }}">All Variant Value</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('Admin')||Auth::User()->hasRole('CEO'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Products<span class="badge badge-pill badge-cyan ml-auto">240</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('product/create') }}">Add Product</a></li>
                                <li><a href="{{ url('product') }}">All Products</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('Admin')||Auth::User()->hasRole('CEO'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Categories<span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('category/create') }}">Add Category</a></li>
                                <li><a href="{{ url('category') }}">All Categories</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('Admin')||Auth::User()->hasRole('CEO'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Bulk Query<span class="badge badge-pill badge-cyan ml-auto"></span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('bulk') }}">All Bulk Query</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('Admin') || Auth::User()->hasRole('CEO'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Carousel</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('slider') }}">All Carousel</a></li>
                                <li><a href="{{ url('slider/create') }}">Add Carousel</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('Admin') || Auth::User()->hasRole('CEO'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Contact Details</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('contacts' )}}">Contacts</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('Admin')||Auth::User()->hasRole('ceo'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu"> Personal Details</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('adddetails') }}">All Personal Details</a></li>
                                <li><a href="{{ url('adddetails/create') }}">Add Personal Details</a></li>
                                <li><a href="{{ url('sociallink') }}">Social Links</a></li>
                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('Admin')||Auth::User()->hasRole('ceo'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Animation</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('video') }}">Video All</a></li>
                                <li><a href="{{ url('video/create') }}">Video Add</a></li>

                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('Admin')||Auth::User()->hasRole('CEO'))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">News & Events</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('all_news') }}">News All</a></li>
                                <li><a href="{{ url('news') }}">News Add</a></li>

                            </ul>
                        </li>
                        @endif
                        @if(Auth::User()->hasRole('Admin') && Auth::User()->hasRole('CEO'))
                        <li> <a class="waves-effect waves-dark" href="{{url('index_dash')}}" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu">Dashboard</span></a></li>
                        @endif
                        <li> <a class="waves-effect waves-dark" href="{{url('/admin')}}" aria-expanded="false"><i class="fa fa-circle-o text-success"></i><span class="hide-menu"> Web portal</span></a></li>
                        <li>
                            <a  class="waves-effect waves-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form  id = "logout-form" action="{{ route('logout') }}" method="POST">
                                {{csrf_field()}}
                            </form>
                        </li>

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
    <script src="{{ asset('assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/custom.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/tinymce/tinymce.min.js')}}"></script>

    <script src="{{ asset('assets/node_modules/footable/js/footable.all.min.js')}}"></script>
    <script src="{{ asset('js/pages/footable-init.js')}}"></script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('assets/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/morrisjs/morris.min.js')}}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('assets/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/morrisjs/morris.js')}}"></script>
    <script src="{{ asset('js/pages/morris-data.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('js/ecom-dashboard.js')}}"></script>
    <script src="{{ asset('assets/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/tinymce/tinymce.min.js')}}"></script>
    <!-- This demographic page plugins -->


    <!-- ============================================================== -->
    <!--sparkline JavaScript -->
    <script src="{{ asset('assets/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/morrisjs/morris.js')}}"></script>
    <script src="{{ asset('assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- Vector map JavaScript -->
    <!-- Chart JS -->
    <script src="{{ asset('assets/node_modules/flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('assets/node_modules/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <!--sparkline JavaScript -->
    <script src="{{ asset('assets/node_modules/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- EASY PIE CHART JS -->
    <script src="{{ asset('assets/node_modules/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/jquery.easy-pie-chart/easy-pie-chart.init.js')}}"></script>
    <!-- Vector map JavaScript -->
    <script src="{{ asset('assets/node_modules/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{ asset('assets/node_modules/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{ asset('js/dashboard3.js')}}"></script>
    <script src="{{ asset('js/dashboard2.js')}}"></script>
    <script src="{{ asset('js/dashboard1.js')}}"></script>
    <script src="{{ asset('js/dashboard4.js')}}"></script>
<!-- This demographic page plugins end-->

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

     $(document).ready(function() {

        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

            });
        }
    });
    </script>
</body>

</html>
