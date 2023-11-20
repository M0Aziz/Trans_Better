@extends('back.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-body">
  <h2 style="marginRight:40px;">Create New image for a mean of transport</h2>

      <form action="{{ url('imageMoyen') }}" method="post">
        {!! csrf_field() !!}
        @csrf
        <div class="mb-3"> 
        <label>Select a mean of transport</label>
        <br/>
            <select name="moyen_id" class="form_control">
                @foreach ($moyens as $item)
                <option value=" {{ $item->id }} ">{{$item->numero}}</option>
                @endforeach
            </select>
        </div>   

        </br>
        <label>Path</label>
        <input type="text" name="path" id="path" class="form-control" required></br>
        @if ($errors->has('path'))
        <span class="text-danger">{{ $errors->first('path') }}</span>
        @endif
        <br/>
        <br/>

        <input type="submit" value="Save" class="btn btn-success" required></br>
    </form>
    
  </div>
</div>
  
@stop