@extends('back.layout')

@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Images</h2>
                    </div>
                    @if(session('message'))
                <div id="notification" class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        var notification = $('#notification');
        if (notification.length > 0) {
            setTimeout(function(){
                notification.fadeOut(500, function(){
                    notification.remove();
                });
            }, {{ session('messageTimeout', 5) }} * 100);
        }
    });
</script>
                    <div class="card-body">
                        <a href="{{ url('/imageMoyen/create') }}" class="btn btn-success btn-sm" title="Add New mean">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Path</th>
                                        <th>Mean</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($image as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->path}}</td>
                                        <td>{{$item->moyen->numero}}</td>

                                        <td>
                                            <a href="{{ url('/imageMoyen/' . $item->id . '/edit') }}" title="Edit Image"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/imageMoyen' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Image"><i class="fa fa-trash-o" aria-hidden="true" onclick="return confirm("Confirm delete?")"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>                    
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection