@extends('back.layout')

@section('content')
    <div class="container">
        <h2 class="mt-5">Détails de la Categorie </h2>
        <a href="{{ route('categories.index') }}" class="mt-3 mb-5">Retour</a>
<br>
<br>
<br>
        <table class="table">
            <tbody>
                <tr>
                    <td>ID:</td>
                    <td>{{ $categorie->id }}</td>
                </tr>
                <tr>
                    <td>Nom:</td>
                    <td>{{ $categorie->nom }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-warning">Modifier</a>
        <button type="button" class="btn btn-danger" onclick="deleteCategorie({{ $categorie->id }})">Supprimer</button>

        <form id="delete-form-{{ $categorie->id }}"action="{{ route('categories.destroy', $categorie->id) }}" method="POST" style="display: inline;">
            @csrf
        </form>
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
