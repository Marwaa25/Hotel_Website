@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Comment Details') }}</div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Client ID:</strong>
                            {{ $comment->ID_Client }}
                        </div>
                        <div class="form-group">
                            <strong>Comment:</strong>
                            {{ $comment->Comment }}
                        </div>
                        <div class="form-group">
                            <strong>Note:</strong>
                            {{ $comment->Note }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $comment->datecomment }}
                        </div>
                        <a class="btn btn-primary" href="{{ route('admin.comments.index') }}">Back</a>
                        <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
