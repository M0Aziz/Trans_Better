@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Create New Commande</h2>
     <form action="{{ route('commande.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">total:</label>
                <input type="number" class="form-control" style=" 
                border: 1px solid gray; width:50%" id="total" name="total" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Create</button>
        </form>
    </div>
@endsection
