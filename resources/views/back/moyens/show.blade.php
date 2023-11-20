@extends('back.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-body">
  <h2 style="marginRight:40px;">Moyen Information</h2>
    <div class="card-body">
            <div class="card-body">
                <h6 class="card-text">Id : {{ $moyen->id }}</h6>
                <h6 class="card-title">Numero : {{ $moyen->numero }}</h6>
                <h6 class="card-text">Description : {{ $moyen->description }}</h6>
                <h6 class="card-text">Horaire : {{ $moyen->horaire }}</h6>
            </div>    
            <a href="/moyenTransport" title="View Moyen"><button class="btn btn-info btn-sm"><i  aria-hidden="true"></i> Return</button></a>

    </div>
    </hr>
  </div>
    
  </div>
</div>
  
@stop