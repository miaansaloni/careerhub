@extends('template.base')

@section('title', 'CareerHub - All the Jobs')

@section('herosection')
<section class="about-section text-center">
    <div class="container">
        <h1 class="display-4">Browse All The Job Offers</h1>
        <p class="lead">A selection of the best offers on the market</p>
        <form class="form-inline justify-content-center mt-4">
            <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
            <button class="btn btn-secondary my-3" type="submit">Go</button>
        </form>
    </div>
</section>
@endsection

@section('content')
    @session('no_permission')
        <div class="alert alert-danger" role="alert">
            You don't have the rights to edit this post!
        </div>
    @endsession

    @session('operation_success')
        <div class="alert alert-success" role="alert">
            "{{ session('operation_success')->title }}" deleted successfully
        </div>
    @endsession

    @session('update_success')
        <div class="alert alert-success" role="alert">
            "{{ session('update_success')->title }}" updated successfully <a
                href="{{ route('posts.show', ['id' => session('update_success')->id]) }}">View</a>
        </div>
    @endsession

    @if ($posts->count())
        <div class="posts-container">
            @foreach ($posts as $post)
                <div class="post-item border rounded my-4 p-4 shadow">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0 fw-bold text-uppercase">{{ $post->location }}</p>
                        <div>
                            <span class="badge bg-secondary">{{ $post->contract }}</span>
                            <span class="badge bg-secondary">{{ $post->shifts }}</span>
                            <span class="badge bg-secondary">{{ $post->salary }}</span>
                        </div>
                    </div>
                    <div class="post-header mt-3">
                        <h3><a href="{{ route('posts.show', ['id' => $post]) }}" class="text-decoration-none">{{ $post->title }}</a></h3>
                    </div>
                    <div class="post-meta mt-2">
                        <p class="text-muted mb-0">Last update: {{ $post->updated_at }}</p>
                    </div>
                    <div class="post-body d-flex overflow-hidden mt-3" style="height: 5rem;">
                        <img src="{{ $post->img }}" alt="{{ $post->title }}" class="me-3" style="max-height: 100%;">
                        <p class="ms-2 lh-1 flex-grow-1">{{ \Illuminate\Support\Str::limit($post->description, 200) }}</p>
                    </div>
                    
                    @auth
                        @if (Auth::user()->id === $post->user_id)
                            <div class="post-actions mt-3">
                                <a class="btn btn-warning me-2" href="{{ route('posts.edit', ['id' => $post]) }}">Edit</a>
                                <form action="{{ route('posts.destroy', ['id' => $post]) }}" method="POST" style="display:inline;">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        @endif
                    @endauth
                </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    @else
        <div class="text-center">
            <h2 class="mb-4">No Jobs Available ;(</h2>
            <p class="text-muted">Check back later for new job postings.</p>
        </div>
    @endif
@endsection
