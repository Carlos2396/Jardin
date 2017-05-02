@extends('layouts.master')

@section('title')
    Editar genero
@endsection
@include('layouts.errors')
@section('content')
<form action="/editar/genero/{{$gender->id}}" method="POST">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="family">Familia
            <select class="form-control" id="family" name="family">
                <option value="0">Selecciona</option>
                @foreach($families as $family)
                    @if($family->id==$gender->family_id)
                        <option value="{{$family->id}}" selected>{{$family->name}}</option>
                    @else
                        <option value="{{$family->id}}">{{$family->name}}</option>
                    @endif
                @endforeach
            </select>
        </label>
    </div>

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$gender->name}}" required>
    </div>

    <div class="form-group">
        <label for="name">Descripción</label>
        <textarea class="form-control" id="description" name="description" required>{{$gender->description}}</textarea>
    </div>

    <div class="form-group">
        <label for="water_care">Cuidados con respecto al agua</label>
        <textarea class="form-control" id="water_care" name="water_care" required>{{$gender->water_care}}</textarea>
    </div>

    <div class="form-group">
        <label for="light_care">Cuidados con respecto a la luz</label>
        <textarea class="form-control" id="light_care" name="light_care" required>{{$gender->light_care}}</textarea>
    </div>

    <div class="form-group">
        <label for="temp_care">Cuidados con respecto a la temperatura</label>
        <textarea <textarea class="form-control" id="temp_care" name="temp_care" required>{{$gender->temp_care}}</textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-template-main">Editar</button>
    </div>
</form>
@endsection