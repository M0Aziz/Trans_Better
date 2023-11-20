@extends('back.layout')
@section('content')
  
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Image</div>
  <div class="card-body">
       
      <form action="{{ url('imageMoyen/' .$images->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$images->id}}"  />
        <select name="moyen_id" class="form_control">
                @foreach ($moyens as $item)
                <option value=" {{ $item->id }} " {{$images->moyen_id == $item->id ? 'selected': ''}}>
                {{ $item->numero }}
                </option>
                @endforeach
        </select>
        <br/>        <br/>

        <label>Path</label>
        <input type="text" name="path" id="path"  value="{{ $images->path }}" class="form-control" required></br>
        @if ($errors->has('path'))
        <span class="text-danger">{{ $errors->first('path') }}</span>
        @endif
        <br/>
        <input type="submit" value="Update" class="btn btn-success"></br>

    </form>
    
  </div>
</div>
  
@stop