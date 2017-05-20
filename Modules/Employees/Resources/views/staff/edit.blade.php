@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                     Staff
                </header>
                <div class="panel-body">
                    <div class="row">
                       {!! Form::model($staff, ['route' => ['backend.staff.update', $staff->id], 'method' => 'patch']) !!}

                        @include('staff.fields')

                       {!! Form::close() !!}
                   </div>
                </div>
            </section>
        </div>
    </div>
@endsection