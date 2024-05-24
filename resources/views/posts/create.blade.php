@extends('template.base')

@section('title', 'CareerHub - Create')

@section('content')
    <div class="container my-5">
        <h1 class="display-4 text-center mb-4">Create a New Job Post</h1>

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter job title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter job description"></textarea>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="img" name="img" placeholder="Enter image URL">
            </div>
            <div class="mb-3">
                <label for="requirements" class="form-label">Requirements</label>
                <textarea class="form-control" id="requirements" name="requirements" rows="3" placeholder="Enter job requirements"></textarea>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter job location">
                </div>
                <div class="col-md-6">
                    <label for="contract" class="form-label">Contract</label>
                    <input type="text" class="form-control" id="contract" name="contract" placeholder="Enter contract type">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="shifts" class="form-label">Shifts</label>
                    <input type="text" class="form-control" id="shifts" name="shifts" placeholder="Enter shift details">
                </div>
                <div class="col-md-6">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary">
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>
@endsection
