@extends('back.layout')

@section('content')

<div class="container">
    <h2 class="mt-5">Détails de la sous-catégorie</h2>
    <a href="{{ route('sous_categories.index') }}" class="mt-3 mb-5">Retour</a>
    <br>
    <br>
    <br>
    <p><strong>Nom : </strong> {{ $sousCategorie->nom }}</p>
<br>
<br>
    <a href="{{ route('sous_categories.edit', $sousCategorie->id) }}" class="btn btn-warning">Modifier</a>
    <button type="buuton" class="btn btn-danger" onclick="deleteSousCategorie({{ $sousCategorie->id }})">Supprimer</button>

    <form id="delete-form-{{ $sousCategorie->id }}" action="{{ route('sous_categories.destroy', $sousCategorie->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
    </form>
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
