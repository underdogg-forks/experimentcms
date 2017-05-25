@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}"/>
    <meta name="description" content="{{ $page->meta_description }}"/>
@stop

@section('content')
    <div class="row">
        <div class="jumbotron">
            <img src="//www.gravatar.com/avatar/{{ md5('n.widart@gmail.com') }}?size=150"
                 alt="Nicolas Widart Profile picture" class="img-circle pull-right pull-top"/>
            <h1>Hi,</h1>
            <p>My name is Nicolas Widart, and I'm a freelance <strong>web developer</strong> and
                <strong>consultant</strong>. I'm a <a href="http://www.laravel.com" target="_blank">Laravel</a>
                framework <strong>specialist</strong>; an <strong>open-source contributor</strong> and always on the
                lookout for new technologies and paradigm changes.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h1>Recent blog posts</h1>
        </div>
    </div>
@stop
