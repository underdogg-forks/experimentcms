@extends('layouts.gentel')

@section('content')
    <div class="row">
        <div class="col-lg-12 mailboxes">
            <section class="panel">
                <header class="panel-heading">
                    <div class="box-header">
                        <h2 class="box-title">{!! Lang::get('lang.emails') !!}</h2><a
                                href="{{route('backend.mailboxes.create')}}" class="btn btn-primary pull-right"><span
                                    class="glyphicon glyphicon-plus"></span> &nbsp;{{Lang::get('lang.create_email')}}
                        </a></div>
                    <div style="clear:both"></div>
                    Mailboxes
                    <a class="btn btn-primary pull-right" href="{!! route('backend.mailboxes.create') !!}">Add New</a>
                    <br><br>
                </header>
                <div class="panel-body">


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

                        <?php
                        /*
                            $default_system_email = App\Model\helpdesk\Settings\Email::where('id', '=', '1')->first();
                            if($default_system_email->sys_email) {
                                $default_email = $default_system_email->sys_email;
                            } else {
                                $default_email = null;
                            }
                        */
                        ?>

                        <table class="table table-hover table-bordered table-striped" id="mailboxes-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                </div>
            </section>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(function () {
        $('#mailboxes-table').DataTable({
            processing: true,
            serverSide: true,
            "pageLength": 50,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ajax: '{!! route('api.mailboxes.data') !!}',
            columns: [
                {data: 'mailboxesnamelink', name: 'name'},
                {data: 'edit', name: 'edit', orderable: false, searchable: false},
                {data: 'delete', name: 'delete', orderable: false, searchable: false},
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
