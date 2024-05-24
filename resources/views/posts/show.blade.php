@extends('template.base')

@section('title', "$post->title - CareerHub")

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ $post->img }}" alt="" class="me-3" style="max-height: 100px;">
                    <h1 class="card-title mb-0">{{ $post->title }}</h1>
                </div>
                @session('creation_success')
                    <div class="alert alert-success" role="alert">
                        Job Post Created Successfully
                    </div>
                @endsession
                <div class="mb-4">
                    <h2 class="card-subtitle mb-2">Description</h2>
                    <p class="card-text">{{ $post->description }}</p>
                </div>
                <div class="mb-4">
                    <h2 class="card-subtitle mb-2">Requirements</h2>
                    <p class="card-text">{{ $post->requirements }}</p>
                </div>
                <div class="mb-4">
                    <h2 class="card-subtitle mb-2">Contract</h2>
                    <p class="card-text">{{ $post->contract }}</p>
                </div>
                <div class="mb-4">
                    <h2 class="card-subtitle mb-2">Shifts</h2>
                    <p class="card-text">{{ $post->shifts }}</p>
                </div>
                <div class="mb-4">
                    <h2 class="card-subtitle mb-2">Salary</h2>
                    <p class="card-text">{{ $post->salary }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title mb-3">About the Company</h3>
                <p class="card-text"><strong>Company Name:</strong> {{ $post->company }}</p>
                <p class="card-text"><strong>Location:</strong> {{ $post->location }}</p>
                <div class="mt-4">
                    <button class="btn btn-primary me-2">Contact Us</button>
                    <button class="btn btn-secondary">Submit Resume</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
