<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Post $post)
    {
        $comments = $post->comments;
        return view('comments.index', compact('post', 'comments'));
    }

    public function create(Post $post)
    {
        return view('comments.create', compact('post'));
    }

    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required|string',
        ]);

        $post->comments()->create([
            'body' => $request->body
        ]);

        return redirect()->route('comments.index', $post)->with('success', 'Comment added successfully.');
    }

    public function edit(Post $post, Comment $comment)
    {
        return view('comments.edit', compact('post', 'comment'));
    }

    public function update(Request $request, Post $post, Comment $comment)
    {
        $request->validate(['body' => 'required|string']);
        $comment->update($request->all());
        return redirect()->route('comments.index', $post)->with('success', 'Comment updated successfully.');
    }

    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index', $post)->with('success', 'Comment deleted successfully.');
    }
}
