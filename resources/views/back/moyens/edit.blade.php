@extends('back.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Moyen</div>
  <div class="card-body">
       
      <form action="{{ url('moyenTransport/' .$moyen->id) }}" method="post">
        {!! csrf_field() !!}
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$moyen->id}}"  />
        <label>Numero</label></br>
        <input type="text" name="numero" id="numero" value="{{$moyen->numero}}" class="form-control"></br>
        @if ($errors->has('numero'))
              <span class="text-danger">{{ $errors->first('numero') }}</span>
        @endif
        <br/>
        <label>Descriptipn</label></br>
        <input type="text" name="description" id="description" value="{{$moyen->description}}" class="form-control"></br>
        @if ($errors->has('description'))
              <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
        <br/>
        <label>Horaire</label></br>
        <input type="time" name="horaire" id="horaire" value="{{$moyen->horaire}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>

    </form>
    
  </div>
</div>
  
@stop