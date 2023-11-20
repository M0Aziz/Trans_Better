@extends('back.layout')

@section('content')
    <div class="container">
        <h2 class="mt-5">Modifier la Categorie</h2>
        @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
        <a href="{{ route('categories.index') }}" class="mt-3 mb-5">Retour</a>
        <br>
        <br>
        <br>
        <form action="{{ route('categories.update', ['categorie' => $categorie->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" style="border: none; border-bottom: 1px solid gray; width: 50%" class="form-control" id="nom" name="nom" value="{{ $categorie->nom }}" >
            </div>
            <button type="submit" class="btn btn-primary mt-5">Update</button>
        </form>
    </div>

   
@endsection
