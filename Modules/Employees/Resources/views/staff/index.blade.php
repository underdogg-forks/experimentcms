@extends('layouts.gentel')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Staff
                    <a class="btn btn-primary pull-right" href="{!! route('backend.staff.create') !!}">Add New</a>
                    <br><br>
                </header>
                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped" id="staff-table">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>

                        <tfoot>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
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
        $('#staff-table').DataTable({
            processing: true,
            serverSide: true,
            "pageLength": 50,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ajax: '{!! route('api.staff.data') !!}',
            columns: [
                {data: 'firstname', name: 'firstname'},
                {data: 'lastname', name: 'lastname'},
                {data: 'email', name: 'email'},
                {data: 'edit', name: 'edit', orderable: false, searchable: false},
                {data: 'delete', name: 'delete', orderable: false, searchable: false},
            ]
        });
    });
</script>
@endpush

