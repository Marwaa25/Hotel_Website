<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class HomeController extends Controller
{

public function index()
{
    $comments = Comment::all();
    $comments = Comment::where('note', '>', 8)->get();
    return view('welcome', ['comments' => $comments]);
}

}
