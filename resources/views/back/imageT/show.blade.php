@extends('back.layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Image Details</h1>
        <div class="mb-3">
            <p><strong>ID:</strong> {{ $image->id }}</p>
            <p><strong>URL:</strong> {{ $image->url }}</p>
        </div>
        <a href="{{ route('images.edit', $image->id) }}" class="btn btn-primary">Edit</a>

        <form action="{{ route('images.destroy', $image->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
