@extends('layouts.master')

@section('title')
    Editar color
@endsection

@section('content')
    <form action="/editar/color/{{$color->id}}" method="POST">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$color->name}}" required>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label for="color">Nuevo color</label>
                    <input type="color" class="form-control" style="width: 60px;"  id="color" name="color" value="{{$color->rgb}}" required>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-template-main">Editar</button>
        </div>

    </form>
@endsection