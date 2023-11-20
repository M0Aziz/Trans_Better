@extends('back.layout')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Image List</h1>
        <a href="{{ route('images.create') }}" class="btn btn-success mb-3">Create New Image</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($images as $image)
                    <tr>
                        <td>{{ $image->id }}</td>
                        <td>{{ $image->url }}</td>
                        <td>
                            <a href="{{ route('images.show', $image->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('images.edit', $image->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
