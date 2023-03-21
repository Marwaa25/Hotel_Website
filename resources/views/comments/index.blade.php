
@extends('layouts.header')

@section('content')
    <div class="container">
        <h1>Comments</h1>
        <a href="{{ route('comments.create') }}" class="btn btn-primary">Create Comment</a>
        <hr>
        @if(count($comments) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Client ID</th>
                        <th>Comment</th>
                        <th>Note</th>
                        <th>Date Comment</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment->id }}</td>
                            <td>{{ $comment->ID_Client }}</td>
                            <td>{{ $comment->Comment }}</td>
                            <td>{{ $comment->Note }}</td>
                            <td>{{ $comment->datecomment }}</td>
                            <td><a href="{{ route('comments.show', $comment->id) }}" class="btn btn-secondary">View</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No comments found.</p>
        @endif
    </div>
@endsection


