@extends('layouts.master')

@section('title')
    Especies
@endsection

@section('content')

    @include('specie.sidebar')

    <div class="col-md-9 col-sm-9">
    <p class="text-muted lead">Nuestro herbario de especies es propio de la región de Cholula en Puebla, contamos con más de 100 especies ...</p>
        @include('specie.list')
    </div>

    <!--<div class="row">
        <div class="col-md-12 banner">
            <a href="#">
                <img src="img/banner2.jpg" alt="" class="img-responsive">
            </a>
        </div>

    </div>-->
@endsection