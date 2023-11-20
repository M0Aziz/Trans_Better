@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Commandes</h2>
        <a href="{{ route('commande.create') }}" class="btn btn-success">Create New Commande</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Total</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $categorie)
                    <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->total }}</td>
                        <td>{{ $categorie->created_at }}</td>
                    <td>
                            <a href="{{ route('commande.show', $categorie->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('commande.edit', $categorie->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('commande.destroy', $categorie->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
