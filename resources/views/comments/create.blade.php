@extends('layouts.header')

@section('content')
    <div class="container">
        <h1>Create Comment</h1>
        <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="client_name">Nom Client:</label>
                <input type="text" name="client_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea name="comment" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="note">Note:</label>
                <input type="text" name="note" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
