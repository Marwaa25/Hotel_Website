@extends('layouts.app')

@section('content')
    <h1>Create Service</h1>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection

