@extends('layouts.gentel')
@section('HeadInclude')
@stop
        <!-- header -->
@section('PageHeader')
    <h3>
        Email Dashboard
<!-- <small>Add</small> -->
    </h3>
@stop
            <!-- /header -->
    <!-- breadcrumbs -->
@section('breadcrumbs')
    <ol class="breadcrumb">

    </ol>
@stop
            <!-- /breadcrumbs -->
    <!-- content -->
@section('content')



    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{!! Lang::get('email::lang.mailboxes') !!}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{ url('/mailpanel/mailboxes/manage') }}"><span class="fa-stack fa-2x">
               <i class="fa fa-envelope-o fa-stack-1x"></i>
               </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('email::lang.mailboxes') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->

                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{ url('/mailpanel/mailbanlist') }}"><span class="fa-stack fa-2x">
                 <i class="fa fa-ban fa-stack-1x"></i>
                 </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('email::lang.ban_lists') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->

                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{ url('/mailpanel/mailtemplates/') }}"><span class="fa-stack fa-2x">

                 <i class="fa fa-mail-forward fa-stack-1x"></i>
                 </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('email::lang.mailtemplates') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->

                    <!--/.col-md-2-->
                    <div class="col-md-2 col-sm-6">
                        <div class="settingiconblue">
                            <div class="settingdivblue">
                                <a href="{{ url('/mailpanel/maildiagno/getmaildiagno') }}"><span class="fa-stack fa-2x">

                 <i class="fa fa-plus fa-stack-1x"></i>
                 </span></a>
                            </div>
                            <center class="box-title">{!! Lang::get('email::lang.diagnostics') !!}</center>
                        </div>
                    </div>
                    <!--/.col-md-2-->

                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- ./box-body -->
    </div>


    @endsection

@section('FooterInclude')

@stop

<!-- /content -->