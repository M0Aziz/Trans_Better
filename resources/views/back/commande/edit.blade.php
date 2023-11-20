@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Edit Commande</h2>
         <form action="{{ route('commande.update', ['commande' => $commande->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">:</label>
                <input type="number" style=" 
                border: 1px solid gray; width:50%" class="form-control" id="nom" name="total" value="{{ $commande->total }}" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Update</button>
        </form>
    </div>
@endsection
