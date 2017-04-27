@extends('layouts.master')

@section('title')
    Especies
@endsection

@section('content')

    @include('specie.specie_sidebar')

    @include('specie._list')

    <div class="row">
        <div class="col-md-12 banner">
            <a href="#">
                <img src="img/banner2.jpg" alt="" class="img-responsive">
            </a>
        </div>

    </div>
@endsection