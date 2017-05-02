@extends('layouts.master')

@section('title')
    Editar familia
@endsection
@include('layouts.errors')
@section('content')

<form action="/editar/familia/{{$family->id}}" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="orden">Orden
            <select class="form-control" id="order" name="order">
                <option value="0">Selecciona</option>
                @foreach($orders as $order)
                    @if($order->id==$family->order_id)
                        <option value="{{$order->id}}" selected>{{$order->name}}</option>
                    @else
                        <option value="{{$order->id}}">{{$order->name}}</option>
                    @endif
                @endforeach
            </select>
        </label>
    </div>

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$family->name}}" required>
    </div>

    <div class="form-group">
        <label for="name">Descripción</label>
        <textarea class="form-control" id="description" name="description" required>{{$family->description}}</textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-template-main">Editar</button>
    </div>

</form>

@endsection