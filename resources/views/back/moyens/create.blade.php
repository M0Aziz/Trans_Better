@extends('back.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-body">
  <h2 style="marginRight:40px;">Create New Means of transport</h2>

      <form action="{{ url('moyenTransport') }}" method="post">
        {!! csrf_field() !!}
        @csrf
        <div class="form-group">
          <label for="numero">Numero</label>
          <input type="text" name="numero" id="numero" class="form-control" required>
          @if ($errors->has('numero'))
              <span class="text-danger">{{ $errors->first('numero') }}</span>
          @endif
        </div> 

        <label>Descriptipn</label></br>
        <input type="text" name="description" id="description" class="form-control" required></br>
        @if ($errors->has('description'))
        <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
        <label>Horaire</label></br>
        <input type="time" name="horaire" id="horaire" class="form-control" required></br>
        @if ($errors->has('horaire'))
        <span class="text-danger">{{ $errors->first('horaire') }}</span>
        @endif

        <input type="submit" value="Save" class="btn btn-success" required></br>
    </form>
    
  </div>
</div>
  
@stop