@extends('back.layout')

@section('content')

<div class="container">
    <div class="container">
        <h2 class="mt-5">Créer une nouvelle sous-catégorie</h2>
        <a href="{{ route('sous_categories.index') }}" class="mt-3 mb-5">Retour</a>
        <br>
        <br>
        <br>
        <form action="{{ route('sous_categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" style="border: none; border-bottom: 1px solid gray; width: 50%" class="form-control" id="nom" value="{{ old('nom') }}">
                @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group mt-3">
                <label for="categorie_id">Catégorie parente</label>
                <select class="form-control" style="border: none; border-bottom: 1px solid gray; width: 50%" id="categorie_id" name="categorie_id" >
                   <option  class="form-control" value=''>Veuillez choisir une Catégorie</option>
                    @foreach ($categories as $categorie)
                        <option  class="form-control" value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
                    @endforeach
                </select>
                @error('categorie_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-4">Créer</button>
        </form>
    </div>

@endsection
