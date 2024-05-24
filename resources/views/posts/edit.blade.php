@extends('template.base')

@section('title', 'CareerHub - Edit Post')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title mb-4">Edit Job Post</h1>
                    <form method="POST" action="{{ route('posts.update', ['id' => $post]) }}">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $post->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="img" class="form-label">Image URL</label>
                            <input type="text" class="form-control" id="img" name="img" value="{{ $post->img }}">
                        </div>
                        <div class="mb-3">
                            <label for="requirements" class="form-label">Requirements</label>
                            <textarea class="form-control" id="requirements" name="requirements" rows="3">{{ $post->requirements }}</textarea>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ $post->location }}">
                            </div>
                            <div class="col">
                                <label for="contract" class="form-label">Contract</label>
                                <input type="text" class="form-control" id="contract" name="contract" value="{{ $post->contract }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="shifts" class="form-label">Shifts</label>
                                <input type="text" class="form-control" id="shifts" name="shifts" value="{{ $post->shifts }}">
                            </div>
                            <div class="col">
                                <label for="salary" class="form-label">Salary</label>
                                <input type="text" class="form-control" id="salary" name="salary" value="{{ $post->salary }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
