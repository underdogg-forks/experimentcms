<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><i class="fa fa-paw"></i> <span>Application Name</span></a>
        </div>

        <div class="clearfix"></div>
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Company Information</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="fa fa-home"></i>
                            Company Information
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>System</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-laptop"></i> System <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a>Logs<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu">
                                        <a href="#">Error Log</a><span class="label label-success pull-right">Flag</span>
                                    </li>
                                    <li>
                                        <a href="#">Cron Log</a><span class="label label-success pull-right">Flag</span>
                                    </li>
                                    <li>
                                        <a href="#">Sytem Log</a><span class="label label-success pull-right">Flag</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Backups</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- menu profile quick info -->
        <div class="sidebar-footer profile">
            <div class="profile_pic">
                &nbsp;
            </div>
            <div class="profile_info">
                <h2>Username</h2><span>&nbsp;</span>
            </div>
        </div>
        <!-- /menu profile quick info -->


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
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="tooltip"
               data-placement="top" title="Logout"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">{{ csrf_field() }}</form>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>