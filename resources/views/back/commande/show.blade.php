@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Commande Details</h2>
   
        <table class="table">
            <tbody>
                <tr>
                    <td>ID:</td>
                    <td>{{ $commande->id }}</td>
                </tr>
                <tr>
                    <td>Nom:</td>
                    <td>{{ $commande->total }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
