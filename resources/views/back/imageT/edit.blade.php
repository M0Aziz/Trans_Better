@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Edit Image</h2>
<form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <div class="form-group">
                <label for="ticket_nom">Select a Ticket:</label>
                <select class="form-control" name="ticket_nom" id="ticket_nom" required>
                    @foreach($tickets as $ticket)
                        <option value="{{ $ticket->Nom }}" 
                                @if($image->ticket && $ticket->id == $image->ticket->id) 
                                    selected 
                                @endif>
                            {{ $ticket->Nom }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Update</button>
        </form>
    </div>
@endsection
