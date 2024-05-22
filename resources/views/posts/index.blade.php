@extends('template.base')

@section('title', 'CareerHub - All the Jobs')

@section('content')
    @session('no_permission')
        <div class="alert alert-danger" role="alert">
            You don't have the rights to edit this post!
        </div>
    @endsession

    @session('operation_success')
        <div class="alert alert-success" role="alert">
            "{{ session('operation_success')->title }}" deleted succesfully
        </div>
    @endsession

    @session('update_success')
        <div class="alert alert-success" role="alert">
            "{{ session('update_success')->title }}" updated successfully <a
                href="{{ route('posts.show', ['id' => session('update_success')->id]) }}">View</a>
        </div>
    @endsession

    @if ($posts->count())
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Img</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">Updated_at</th>
                    @auth <th scope="col">Actions</th> @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td><a href="{{ route('posts.show', ['id' => $post]) }}">{{ $post->title }}</a></td>
                        <td>{{ $post->body }}</td>
                        <td>{{ $post->img }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->updated_at }}</td>
                        @auth
                            <td>
                                @if (Auth::user()->id === $post->user_id)
                                    <a class="btn btn-warning" href="{{ route('posts.edit', ['id' => $post]) }}">Edit</a>
                                    <form action="{{ route('posts.destroy', ['id' => $post]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                @endif
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    @else
        <h2>No Jobs Avaibile ;(</h2>
    @endif
@endsection
