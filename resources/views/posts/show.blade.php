@extends('template.base')

@section('title', "$post->title - CareerHub")

@section('content')
    <h1>{{ $post->title }}</h1>

    @session('creation_success')
        <div class="alert alert-success" role="alert">
            Job Post Created Succesfully
        </div>
    @endsession

    <h2>Body: {{ $post->body }}</h2>
    <img src="{{ $post->img }}" alt="">
@endsection
