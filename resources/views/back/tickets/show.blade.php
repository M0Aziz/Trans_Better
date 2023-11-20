@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Ticket Details</h2>
        <table class="table">
            <tbody>
                <tr>
                    <td>ID:</td>
                    <td>{{ $ticket->id }}</td>
                </tr>
                <tr>
                    <td>Nom:</td>
                    <td>{{ $ticket->Nom }}</td>
                </tr>
                <tr>
                    <td>Prix:</td>
                    <td>{{ $ticket->Prix }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
