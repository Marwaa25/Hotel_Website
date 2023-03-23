<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', ['comments' => $comments]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
    }

    //  * Store a newly created resource in storage.

    public function store(Request $request)
    {
        $comment = new Comment;
        $comment->ID_Client = $request->input('client_id');
        $comment->client_name = $request->input('client_name');
        $comment->Comment = $request->input('comment');
        $comment->Note = $request->input('note');
        $comment->datecomment = date('Y-m-d');
        $comment->save();

        return redirect()->route('comments.index')->with('success', 'Comment added successfully.');
    }


    //  * Display the specified resource.

    public function show($id)
    {
        $comment = Comment::find($id);
        return view('comments.show', ['comment' => $comment]);
    }

    
}
