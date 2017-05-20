<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Master Master</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('themes/flatback/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('themes/flatback/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('themes/flatback/css/font-awesome.min.css')}}" rel="stylesheet"/>


    <!--right slidebar-->
    <link href="{{asset('themes/flatback/css/slidebars.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{asset('themes/flatback/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('themes/flatback/css/style-responsive.css')}}" rel="stylesheet"/>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('themes/flatback/js/html5shiv.js')}}"></script>
    <script src="{{asset('themes/flatback/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body>

<section id="container">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="javascript:" class="logo">Master Backend</span></a>
        <!--logo end-->

        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg" height="29"
                             width="29" alt="User Image"/>
                        <span class="username">
                            @if (Auth::guest())
                                InfyOm
                            @else
                                {!! Auth::user()->name !!}
                            @endif
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                        <li><a href="{!! url('/logout') !!}"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>

                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    @include('layouts.sidebar')

            <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <!--state overview start-->
            @yield('content')

        </section>

    </section>
    <!--main content end-->

    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2016 &copy; FlatLab Templates By InfyOm.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- jQuery 2.1.4 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Datatables -->
<script src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>

<!-- js placed at the end of the document so the pages load faster -->
<script class="include" type="text/javascript"
        src="{{asset('themes/flatback/js/jquery.dcjqaccordion.2.7.js')}}"></script>

<script src="{{asset('themes/flatback/js/respond.min.js')}}"></script>
<script src="{{asset('themes/flatback/js/slidebars.min.js')}}"></script>
<script src="{{asset('themes/flatback/js/common-scripts.js')}}"></script>

@stack('scripts')

</body>
</html>