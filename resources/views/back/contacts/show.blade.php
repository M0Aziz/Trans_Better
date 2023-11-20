@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Contact Details</h2>
       
        <table class="table">
            <tbody>
                <tr>
                    <td>ID:</td>
                    <td>{{ $contact->id }}</td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td>{{ $contact->message }}</td>
                </tr>
                <tr>
                    <td>Objet:</td>
                    <td>{{ $contact->obj_message }}</td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td>{{ $contact->date }}</td>
                </tr>
                <tr>
                    <td>User name:</td>
                    <td>{{ $contact->user->name }}</td>
                </tr>
                
            </tbody>
        </table>
        <a href="{{ route('contacts.index',) }}" class="btn btn-info">Back</a>
    </div>
@endsection
