@extends('layouts.master')

@section('title')
    Editar clase
@endsection

@section('content')
    

    <form action="/editar/clase/{{$class->id}}" method="POST" id="classForm">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$class->name}}" required>
        </div>

        <div class="form-group">
            <label for="name">Descripción</label>
            <textarea class="form-control" id="description" name="description"required>{{$class->description}}</textarea>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-template-main">Editar</button>
        </div>
    </form>
@endsection