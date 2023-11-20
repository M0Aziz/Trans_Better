@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Create New Image</h2>
        <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data" class="mt-5">
            @csrf

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="ticket_id">Select a Ticket:</label>
                <select class="form-control" name="ticket_id" id="ticket_id" required>
                    @if(count($tickets) > 0)
                        @foreach($tickets as $ticket)
                            <option value="{{ $ticket->id }}">{{ $ticket->Nom }}</option>
                        @endforeach
                    @else
                        <option value="">No tickets available</option>
                    @endif
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
