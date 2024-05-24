<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::all();
        $posts = Post::select()->paginate(4);
        return view('posts.index', compact('posts'));
    }

    public function create(Request $request)
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $newPost = new Post();
        $newPost->title = $data['title'];
        $newPost->description = $data['description'];
        $newPost->img = $data['img'];
        $newPost->requirements = $data['requirements'];
        $newPost->location = $data['location'];
        $newPost->contract = $data['contract'];
        $newPost->shifts = $data['shifts'];
        $newPost->salary = $data['salary'];
        $newPost->user_id = $request->user()->id;
        $newPost->save();
        return redirect()->route('posts.show', ['id' => $newPost->id])->with('creation_success', $newPost);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        if (Auth::user()->id !== $post->user_id) {
            return redirect()->route('posts.index')->with('no_permission', $post);
        }
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $post = Post::findOrFail($id);
        if ($request->user()->id !== $post->user_id) abort(401);
        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->img = $data['img'];
        $post->requirements = $data['requirements'];
        $post->location = $data['location'];
        $post->contract = $data['contract'];
        $post->shifts = $data['shifts'];
        $post->salary = $data['salary'];
        $post->update();
        return redirect()->route('posts.index')->with('update_success', $post);
    }

    public function destroy(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if (Auth::user()->id !== $post->user_id) abort(401);
        $post->delete();
        return redirect()->route('posts.index')->with('operation_success', $post);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', [
            'post' => $post
        ]);
    }
    
    // public function list()
    // {
    //     $posts = Post::all();
    //     return response()->json([
    //         'success' => true,
    //         'data'  => $posts
    //     ]);
    // }
}
