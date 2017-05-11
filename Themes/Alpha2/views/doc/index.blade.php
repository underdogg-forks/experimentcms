@extends('layouts.master')

@section('title'){{ $title }} - Documentation | @parent @stop

@section('meta')
    <meta name="description" content="AsgardCms Documentation: {{ $title }} - {{ $subtitle }}" />
@stop

@section('content')
<section id="main" class="container">
    <header>
        <h2>{{ $title }}</h2>
        <p>{{ $subtitle }}</p>
    </header>
    <div class="row box row-box 0%">
        <div class="3u">
            @include('doc.partials.sidebar')
        </div>
        <div class="9u documentation">
            {!! $content !!}
        </div>
    </div>
</section>
@stop

@section('scripts')
    <script>
        $( document ).ready(function() {
            $('.jsUpgradeGuide').on('click', function (e) {
                e.preventDefault();
                $(this).next().slideToggle();
            });
        });
    </script>
@stop
