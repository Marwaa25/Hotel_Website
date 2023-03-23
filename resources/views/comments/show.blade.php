@extends('layouts.header')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Comment Details') }}</div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nom Client:</strong>
                            {{ $comment->client_name }}
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
                        <a class="btn btn-primary" href="{{ route('comments.index') }}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
