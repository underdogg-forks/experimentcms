@extends('layouts.master')

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
                   @include('employees::staff.table')
                </div>
            </section>
        </div>
    </div>
@endsection

