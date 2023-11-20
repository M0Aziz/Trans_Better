@extends('back.layout')

@section('content')

<div class="container">
    <h2 class="mt-5">Liste des sous-catégories</h2>


    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   
@endif


    <a href="{{ route('sous_categories.create') }}" class="btn btn-primary">Créer une nouvelle sous-catégorie</a>

    <table class="table mt-5">
        <thead>
            <tr class="text-center">
                <th>ID</th>

                <th>Nom</th>
                <th>Catégorie</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sousCategories as $sousCategorie)
                <tr class="text-center">
                    <td> {{ $sousCategorie->id }}</td>

                    <td>{{ $sousCategorie->nom }}</td>

                    @if (isset($sousCategorie->categorie) && $sousCategorie->categorie->nom != null)
                    <td>{{ $sousCategorie->categorie->nom }}</td>
                @endif
                
                    <td>
                        <a href="{{ route('sous_categories.show', $sousCategorie->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('sous_categories.edit', $sousCategorie->id) }}"  class="btn btn-warning">Modifier</a>
                        <button type="button" class="btn btn-danger" onclick="deleteSousCategorie({{ $sousCategorie->id }})">Supprimer</button>

                        <form id="delete-form-{{ $sousCategorie->id }}" action="{{ route('sous_categories.destroy', $sousCategorie->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


<script>
    function deleteSousCategorie(id) {
        if (confirm("Êtes-vous sûr de vouloir supprimer cette sous-catégorie ?")) {
            event.preventDefault();
            document.getElementById('delete-form-' + id).submit();
        }
    }
</script>

@endsection
