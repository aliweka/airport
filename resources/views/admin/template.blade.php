<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> {{--panel | {{ $page_name }}--}} {{ isset($page_name) ? $page_name : 'Page Title' }} </title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('assets/panel/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/panel/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/panel/css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="{{ asset('assets/panel/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/panel/css/icheck/flat/green.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/panel/js/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/panel/js/datatables/buttons.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/panel/js/datatables/fixedHeader.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/panel/js/datatables/responsive.bootstrap.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/panel/js/datatables/scroller.bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

    <script src="{{ asset('assets/panel/js/jquery.min.js') }}"></script>

    <!--[if lt IE 9]>
    <script src="../assets/js/ie8-responsive-file-warning.js'"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{ url('/panel') }}" class="site_title"><i class="fa fa-paw"></i>
                        <span> Air plane Panel </span></a>
                </div>
                <div class="clearfix"></div>

                <!-- menu prile quick info -->
                <div class="profile">
                    <div class="profile_pic">

                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu prile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li>
                                <a href="{{ url('panel/inventory') }}">
                                    <i class="fa fa-cogs"
                                       aria-hidden="true"></i></i> inventory </a>

                            </li>

                            <li>
                                <a href="{{ url('panel/orders') }}">
                                    <i class="fa fa-bell"
                                       aria-hidden="true"></i></i> Orders </a>

                            </li>
                            <li>
                                <a href="{{ url('panel/notes') }}">
                                    <i class="fa fa-commenting"
                                       aria-hidden="true"></i></i> Notes </a>

                            </li>

                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

            <div class="nav_menu">
                <nav class="" role="navigation">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="images/img.jpg" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                        <span class="image">
                                          <img src="images/img.jpg" alt="Profile Image"/>
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                        <span class="image">
                                          <img src="images/img.jpg" alt="Profile Image"/>
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                        <span class="image">
                                          <img src="images/img.jpg" alt="Profile Image"/>
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                        <span class="image">
                                          <img src="images/img.jpg" alt="Profile Image"/>
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main" style="min-height: 950px;">
            <div class="header">
                <div class="page-title">
                    <div class="title_left">
                        <h3 class="text-center">
                            @if(isset($sub))
                                {{ $page_name . " / " . $sub }}
                            @else
                                {{ $page_name }}
                            @endif
                        </h3>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="content">
                @yield('content')
            </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                All &copy; Copy Rights Reserved
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group"></ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<script src="{{ asset('assets/panel/js/bootstrap.min.js') }}"></script>

<!-- bootstrap progress js -->
<script src="{{ asset('assets/panel/js/progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- icheck -->
<script src="{{ asset('assets/panel/js/icheck/icheck.min.js') }}"></script>

<script src="{{ asset('assets/panel/js/custom.js') }}"></script>
<script type="text/javascript">
    $().DataTable();
</script>
<!-- pace -->
<script src="{{ asset('assets/panel/js/pace/pace.min.js') }}"></script>

<!-- Datatables-->
<script src="{{ asset('assets/panel/js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/buttons.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/jszip.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/panel/js/datatables/dataTables.scroller.min.js') }}"></script>


<!-- pace -->
<script src="{{ asset('assets/panel/js/pace/pace.min.js') }}"></script>
@yield('scripts')
<script>
    var handleDataTableButtons = function () {
                "use strict";
                0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                    dom: "Bfrtip",
                    buttons: [{
                        extend: "copy",
                        className: "btn-sm"
                    }, {
                        extend: "csv",
                        className: "btn-sm"
                    }, {
                        extend: "excel",
                        className: "btn-sm"
                    }, {
                        extend: "pdf",
                        className: "btn-sm"
                    }, {
                        extend: "print",
                        className: "btn-sm"
                    }],
                    responsive: !0
                })
            },
            TableManageButtons = function () {
                "use strict";
                return {
                    init: function () {
                        handleDataTableButtons()
                    }
                }
            }();
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
            keys: true
        });
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });
    });
    TableManageButtons.init();
</script>

</body>
</html>