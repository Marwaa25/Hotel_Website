@extends('layouts.app')

@section('content')
<div class="container">
<h1>Edit service</h1>
<form action="{{ route('services.update', $service->id) }}" method="POST">
@csrf
@method('PUT')
<div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $service->name) }}">
@error('name')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
<label for="description">Description</label>
<textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description', $service->description) }}</textarea>
@error('description')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
<label for="price">Price</label>
<input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $service->price) }}">
@error('price')
<div class="invalid-feedback">{{ $message }}</div>
@enderror
</div>
<button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection



