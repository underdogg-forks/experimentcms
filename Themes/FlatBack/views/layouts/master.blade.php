<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>Master Master</title>


    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

    <link href="{{ asset("themes/flatback/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ asset("themes/flatback/css/responsive.css") }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset("themes/flatback/css/flatback.css") }}" rel="stylesheet" id="skin-switcher">


    <!-- Font Awesome -->
    <link href="{{ asset("themes/flatback/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- FONTS -->

</head>
<body>


<!-- HEADER -->
<header class="navbar clearfix" id="header">
    <div class="container">
        <div class="navbar-brand">


            <a href="#">
                <i class="fa fa-phone"></i> &nbsp; <strong>SiteName</strong>
            </a>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
                <a id="menu-toggle" href="#" class="glyphicon glyphicon-align-justify btn-menu toggle">
                    <i class="fa fa-bars">Toggleme</i>
                </a>
                <a href="#">Project name</a>
            </div>
        </div>
        <!-- NAVBAR LEFT -->
        <ul class="nav navbar-nav pull-left hidden-xs" id="navbar-left">
            <li class="active"><a href="#">ActiveMenu</a></li>


            <li><a href="#">Relations</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Trade</a></li>

        </ul>
        <!-- /NAVBAR LEFT -->
        <!-- BEGIN TOP NAVIGATION MENU -->
        <ul class="nav navbar-nav pull-right">

            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <!-- END NOTIFICATION DROPDOWN -->
            <!-- BEGIN TODO DROPDOWN -->
            <!-- END TODO DROPDOWN -->


            <!-- END TODO DROPDOWN -->
            <!-- BEGIN USER LOGIN DROPDOWN -->
            <li class="dropdown " id="header-user">
                <a href="http://www.okcaller.com/05347766#" class="dropdown-toggle" data-toggle="dropdown">


                    <i class="fa fa-user"></i> User Login

                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="http://www.okcaller.com/login.php"><i class="fa fa-user"></i> Registered User</a></li>
                    <li><a href="http://www.okcaller.com/register.php"><i class="fa fa-cog"></i> Create Account</a></li>

                </ul>
            </li>
            <!-- END USER LOGIN DROPDOWN -->

            <li><a href="#">Help</a></li>

        </ul>
        <!-- END TOP NAVIGATION MENU -->
    </div>


</header>
<!--/HEADER -->

<!-- PAGE -->
<section id="page">
    <!-- SIDEBAR -->
    <div id="sidebar" class="sidebar mini-menu">
        <div class="sidebar-menu nav-collapse">
            <div class="divide-20"></div>


            <!-- SIDEBAR MENU -->
            <ul>
                <li class="treeview @yield('Staff')">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Staff</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li @yield('agents')><a href="{!! route('backend.staff.index') !!}"
                                                class="nav-link nav-toggle {!! Request::is('staff*') ? 'active' : '' !!}"><i
                                        class="fa fa-user "></i><span class="title">Staff</span></a></li>
                        <li @yield('departments')><a href="{{ url('/backend/departments') }}"><i
                                        class="fa fa-sitemap"></i>Departments</a></li>
                        <li @yield('teams')><a href="{{ url('/backend/teams') }}"><i class="fa fa-users"></i>Teams</a>
                        </li>
                        <li @yield('roles')><a href="{{ url('/backend/groups') }}"><i class="fa fa-users"></i>Roles</a>
                        </li>
                    </ul>
                </li>

                <li><a class="" href="#"><i class="fa fa-bookmark fa-fw"></i> <span
                                class="menu-text">Address Book</span></a></li>
                <li><a class="" href="#"><i class="fa fa-bullhorn fa-fw"></i> <span class="menu-text">My Comments</span></a>
                </li>
                <li><a class="" href="#"><i class="fa fa-calendar fa-fw"></i> <span
                                class="menu-text">Audit Log</span></a></li>

                <li><a class="" href="#"><i class="fa fa-bar-chart-o fa-fw"></i> <span
                                class="menu-text">Recent &nbsp;<span
                                    class="label label-success">SafeCaller</span></span></a></li>
                <li><a class="" href="#"><i class="fa fa-umbrella fa-fw"></i> <span
                                class="menu-text"> Recent &nbsp;<span class="label label-danger">Not Safe</span></span></a>
                </li>

                <li><a class="" href="#"><i class="fa fa-pencil-square-o fa-fw"></i> <span class="menu-text">Send message</span></a>
                </li>
                <li><a class="" href="#"><i class="fa fa-columns fa-fw"></i> <span class="menu-text">Website &amp; Blog Owners</span></a>
                </li>

            </ul>

            <!-- /SIDEBAR MENU -->
        </div>
    </div>
    <!-- /SIDEBAR -->


    <div id="main-content" class="">
        <div class="container">
            <div class="row">
                <div id="content" class="col-lg-12">
                    <!-- PAGE HEADER / Breadcrumbs -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header">
                                <!-- BREADCRUMBS -->
                                <ul class="breadcrumb">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Area Code 053</a>
                                    </li>
                                    <li><a href="#">053-477</a></li>

                                    <li><a href="#"> 053-477-66##</a></li>
                                </ul>
                                <!-- /BREADCRUMBS -->
                                <div class="clearfix">
                                @yield('content-header')
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-lg-12 col-md-9 col-sm-7">
                            @yield('content')
                        </div>
                    </div>

                    <div class="separator"></div>

                    <!-- PAGE FOOTER / Breadcrumbs -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header">
                                <!-- BREADCRUMBS -->
                                <ul class="breadcrumb">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Area Code 053</a>
                                    </li>
                                    <li><a href="#">053-477</a></li>

                                    <li><a href="#"> 053-477-66##</a></li>
                                </ul>
                                <!-- /BREADCRUMBS -->


                                <div class="clearfix">
                                    <h3 class="content-title pull-left">Page Title (pull left)</h3>
                                </div>
                                <div class="description">Page Subtitle</div>
                                @yield('content-header')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="navbar clearfix" id="footer">
        <div class="container">
            (footer, sortof)
        </div>
    </footer>
</section>
<!-- jQuery -->
<script src="{{ asset("themes/flatback/js/jquery-2.0.3.min.js") }}"></script>
<!-- JQUERY UI-->
<script src="{{ asset("themes/flatback/js/jquery-ui-1.10.3.custom.min.js") }}"></script>
<!-- BOOTSTRAP -->
<script src="{{ asset("themes/flatback/js/bootstrap.min.js") }}"></script>


<!-- CUSTOM SCRIPT -->
<script src="{{ asset("themes/flatback/js/script.js") }}"></script>
<script>
    $("#menu-toggle").click(function (e) {
        jQuery('#sidebar').addClass("mini-menu");
        jQuery('#main-content').addClass("margin-left-50");
        jQuery('.sidebar-collapse i').removeClass(iconLeft);
        jQuery('.sidebar-collapse i').addClass(iconRight);
        /* Remove placeholder from Search Bar */
        jQuery('.search').attr('placeholder', '');
        collapsed = true;
    });
</script>
<!-- /JAVASCRIPTS -->

</body>
</html>