@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        </div>
    </div>
</div>
@endsection
