@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Edit Contact</h2>
         <form action="{{ route('contacts.update', ['contact' => $contact->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="message">Message:</label>
                <input type="text" style=" 
                border: 1px solid gray; width:50%" class="form-control" id="message" name="message" value="{{ $contact->message }}" required>
                <label for="obj_message">Ojbet:</label>
                <input type="text" style=" 
                border: 1px solid gray; width:50%" class="form-control" id="obj_message" name="obj_message" value="{{ $contact->obj_message }}" required>
                <label for="date">Date:</label>
                <input type="date" style=" 
                border: 1px solid gray; width:50%" class="form-control" id="date" name="date" value="{{ $contact->date }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Update</button>
        </form>
        <a href="{{ route('contacts.index',) }}" class="btn btn-info">Back</a>

    </div>
@endsection
