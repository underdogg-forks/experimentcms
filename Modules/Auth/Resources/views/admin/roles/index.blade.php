@extends('layouts.gentel')

@section('StaffPanel')
    class="active"
@stop
@section('staffpanel-bar')
    active
@stop
@section('roles')
    class="active"
    @stop

    @section('HeadInclude')
    @stop
            <!-- header -->
@section('PageHeader')
    <h1>{{Lang::get('core::lang.roles')}}</h1>

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

    <div class="row">

        <!-- check whether success or not -->
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissable">
                <i class="fa  fa-check-circle"></i>
                <b>Success!</b>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('success')}}
            </div>
        @endif
                    <!-- failure message -->
        @if(Session::has('fails'))
                <div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <b>Fail!</b>
                    <button type="button" class="close" data-dismiss="alert"
                            aria-hidden="true">&times;</button>
                    {{Session::get('fails')}}
                </div>
        @endif


        <div class="col-md-12 roles">
            <div class="row">
                <div class="" style="margin: 0 15px 15px 0;">
                    <h2 class="pull-left">Departments</h2>
                </div>
            </div>
            <div class="row">
                <div class="btn-group pull-right" style="margin: 0 15px 15px 0;">
                    <a href="{{ route('backend.roles.create') }}" class="btn btn-primary btn-flat" style="padding: 4px 10px;">
                        <i class="fa fa-pencil"></i> Create Department
                    </a>
                </div>
            </div>
            <div class="box box-primary">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <div class="table-responsive" style="overflow:hidden">
                        <table class="data-table table table-hover table-bordered table-striped dataTable" id="roles-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-table-responsive -->
                </div><!-- /.box body -->
                <div class="box-footer">
                    &nbsp;
                </div>
            </div><!-- /box primary -->
        </div><!-- div md-12 -->
    </div>
    @include('core::partials.delete-modal')

@endsection

@push('scripts')
<script>
    $(function () {
        $('#roles-table').DataTable({
            processing: true,
            serverSide: true,
            "pageLength": 50,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ajax: '{!! route('api.roles.data') !!}',
            columns: [
                {data: 'rolesnamelink', name: 'name'},
                {data: 'actions', name: 'actions', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endpush


<!-- Optional bottom section for modals etc... -->
@section('body_bottom')
    <script language="JavaScript">
        function toggleCheckbox() {
            checkboxes = document.getElementsByName('chkDepartments[]');
            for (var i = 0, n = checkboxes.length; i < n; i++) {
                checkboxes[i].checked = !checkboxes[i].checked;
            }
        }
    </script>
@endsection