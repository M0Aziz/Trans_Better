@extends('back.layout')

@section('content')
    <div class="container">
        <h2 class="mt-5">Créer une nouvelle Categorie</h2>
       
        <a href="{{ route('categories.index') }}" class="mt-3 mb-5">Retour</a>
        <br>
        <br>
        <br>
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" style="border: none; border-bottom: 1px solid gray; width: 50%" id="nom" name="nom" >

            <button type="submit" class="btn btn-primary mt-5">Create</button>
        </form>
    </div>
@endsection
