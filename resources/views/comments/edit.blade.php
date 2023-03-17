@extends('layouts.header')

@section('content')
    <div class="container">
        <h1>Edit Comment</h1>
        <hr>
        <form action="{{ route('comments.update', ['comment' => $comment->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" id="comment" name="comment" required>{{ $comment->Comment }}</textarea>
            </div>
            <div class="form-group">
                <label for="note">Note:</label>
                <input type="number" class="form-control" id="note" name="note" value="{{ $comment->Note }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Comment</button>
        </form>
    </div>
@endsection
