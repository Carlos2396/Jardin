@extends('layouts.master')

@section('title')
    Crear un orden
@endsection

@section('content')
    <div class="col-md-12">
            <div class="box">
                <hr>

                <form action="/ordenes/crear" method="POST">
                
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                     <textarea name="description">
                     Descripción
                    </textarea>
                </div>
                
                <div class="form-group">
                    <label>Clase&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="class">
                            @foreach($classes as $class)
                                <option value="{{$class->id}}">{{$class->name}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Registrarme</button>
                </div>
                </form>
            </div>
        </div>
@endsection