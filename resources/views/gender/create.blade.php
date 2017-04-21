@extends('layouts.master')

@section('title')
    Crear una familia
@endsection

@section('content')
    <div class="col-md-12">
            <div class="box">
                <hr>

                <form action="/generos/crear" method="POST">
                
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group" required>
                     <textarea name="description">
                     Descripción
                    </textarea>
                </div>
                <div class="form-group" required>
                     <textarea name="water_care">
                     Cuidado especifico con respecto al agua
                    </textarea>
                </div>
                <div class="form-group" required>
                     <textarea name="light_care">
                     Cuidado especifico con respecto a la luz
                    </textarea>
                </div>
                 <div class="form-group" required>
                     <textarea name="temp_care">
                     Temporalidad
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Familia
                        <select name="family">
                            @foreach($families as $family)
                                <option value="{{$family->id}}">{{$family->name}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Crear</button>
                </div>
                </form>
            </div>
        </div>
@endsection