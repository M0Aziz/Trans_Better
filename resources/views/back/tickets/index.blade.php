@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Tickets</h2>
        <a href="{{ route('tickets.create') }}" class="btn btn-success">Create New Ticket</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td>{{ $ticket->id }}</td>
                        <td>{{ $ticket->Nom }}</td>
                        <td>{{ $ticket->Prix }}</td>
                        <td>
                            <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
