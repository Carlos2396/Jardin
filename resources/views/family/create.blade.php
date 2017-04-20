@extends('layouts.master')

@section('title')
    Crear una familia
@endsection

@section('content')
    <div class="col-md-12">
            <div class="box">
                <hr>

                <form action="/familias/crear" method="POST">
                
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
                
                <div class="form-group">
                    <label>Orden
                        <select name="order">
                            @foreach($orders as $order)
                                <option value="{{$order->id}}">{{$order->name}}</option>
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