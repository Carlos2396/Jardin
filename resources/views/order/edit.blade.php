@extends('layouts.master')

@section('title')
    Editar Orden
@endsection
@include('layouts.errors')
@section('content')
<form action="/editar/orden/{{$order->id}}" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
        <label>Clase
            <select class="form-control" id="clase" name="clase">
            <option value="0">Selecciona</option>
                @foreach($clases as $clase)
                    @if($clase->id==$order->clase_id)
                        <option value="{{$clase->id}}" selected>{{$clase->name}}</option>
                    @else
                        <option value="{{$clase->id}}">{{$clase->name}}</option>
                    @endif
                @endforeach
            </select>
        </label>
    </div>

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$order->name}}" required>
    </div>

    <div class="form-group">
        <label for="name">Descripción</label>
        <textarea class="form-control" id="description" name="description" required>{{$order->description}}</textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-template-main">Editar</button>
    </div>
</form>
@endsection