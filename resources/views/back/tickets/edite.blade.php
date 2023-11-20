@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Edit Ticket</h2>
         <form action="{{ route('tickets.update', ['ticket' => $ticket->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" style="border: 1px solid gray; width:50%" class="form-control" id="nom" name="nom" value="{{ $ticket->nom }}" required>
            </div>
            <div class="form-group">
                <label for="prix">Prix:</label>
                <input type="text" style="border: 1px solid gray; width:50%" class="form-control" id="prix" name="prix" value="{{ $ticket->prix }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Update</button>
        </form>
    </div>
@endsection
