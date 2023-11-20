@extends('back.layout')

@section('content')
    <div class="container">
        <h2 class="mt-5">Liste des Categories</h2>


        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
       
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
        <a href="{{ route('categories.create') }}" class="btn btn-primary">Créer une nouvelle catégorie</a>
        <table class="table  mt-5">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nom</th>
                    <th class="text-start ms-5">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $categorie)
                    <tr class="text-center">
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->nom }}</td>
                        <td class="d-flex">
                            <a href="{{ route('categories.show', $categorie->id) }}" class="btn btn-info mx-1">Voir</a>
                            <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-warning mx-1">Modifier</a>
                            <button type="button"  class="btn btn-danger mx-1" onclick="deleteCategorie({{ $categorie->id }})">Supprimer</button>

                            <form id="delete-form-{{ $categorie->id }}" action="{{ route('categories.destroy', $categorie->id) }}" method="POST">
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function deleteCategorie(id) {
            if (confirm("Êtes-vous sûr de vouloir supprimer cette catégorie ?")) {
                event.preventDefault();
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
@endsection
