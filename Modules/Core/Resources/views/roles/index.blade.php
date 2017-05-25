@extends('layouts.gentel')

@section('content')
    <div class="row">
        <div class="col-lg-12 roles">
            <section class="panel">
                <header class="panel-heading">
                    Roles
                    <a class="btn btn-primary pull-right" href="{!! route('backend.roles.create') !!}">Add New</a>
                    <br><br>
                </header>
                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped" id="roles-table">
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
        $('#roles-table').DataTable({
            processing: true,
            serverSide: true,
            "pageLength": 50,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ajax: '{!! route('api.roles.data') !!}',
            columns: [
                {data: 'rolesnamelink', name: 'name'},
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
