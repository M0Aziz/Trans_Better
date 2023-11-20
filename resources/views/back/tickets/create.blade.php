@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Create New Ticket</h2>
        <form action="{{ route('tickets.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" style="border: 1px solid gray; width:50%" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prix">Prix:</label>
                <input type="text" class="form-control" style="border: 1px solid gray; width:50%" id="prix" name="prix" required>
            </div>

            <button type="submit" class="btn btn-primary mt-5">Create</button>
        </form>
    </div>
@endsection
