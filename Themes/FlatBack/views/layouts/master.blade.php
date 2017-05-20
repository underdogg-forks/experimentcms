<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="{{ Setting::get('core::site-description') }}"/>
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @section('title'){{ Setting::get('core::site-name') }}@show
    </title>
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">


    {!! Theme::style('css/main.css') !!}
    {!! Theme::style('css/sb-admin-2.css') !!}

    <style>
        body {
            margin: 0;
        }
    </style>
    <script>
        $(document).ready(function () {
            $("#ToggleSideMenu").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggle");
            });
        });
    </script>

</head>
<body>
<div id="wrapper">
    @include('partials.navigation')
    {{--Also contains Side navigation!--}}
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div><!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

    <div class="panel-footer">
        @include('partials.footer')
    </div><!-- /.panel-footer -->


</div><!-- /#wrapper -->
<div class="footer_fixed">Footer</div>

{!! Theme::script('js/all.js') !!}
@yield('scripts')

        <!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>


</body>
</html>
