@extends('back.layout')

@section('content')
    <div class="container">
        <h2>Create New Contact</h2>
     <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="obj_message">Objet:</label>
                <input type="text" class="form-control" style=" 
                border: 1px solid gray; width:50%" id="obj_message" name="obj_message" required>
                <label for="message">Message:</label>
                <input type="text" class="form-control" style=" 
                border: 1px solid gray; width:50%" id="message" name="message" required>
                 <label for="date">Date:</label>
                 <input type="date" class="form-control" style=" 
                 border: 1px solid gray; width:50%" id="date" name="date" required>
                 <label for="user_id">User:</label>
                 <select class="form-control" style=" 
                 border: 1px solid gray; width:50%" id="user_id" name="user_id" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-5">Create</button>
        </form>
        <a href="{{ route('contacts.index',) }}" class="btn btn-info">Back</a>

    </div>
@endsection
