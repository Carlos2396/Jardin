@extends('layouts.master')

@section('title')
    Especies
@endsection

@section('content')

    @include('specie.specie_sidebar')

    <div class="col-sm-9">

        <p class="text-muted lead">Nuestro herbario de especies es propio de la región de Cholula en Puebla, contamos con más de 100 especies ...</p>

        <div class="row products">

            @foreach($species as $specie)
                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="/especies/{{$specie->id}}">
                                <img src="img/species/{{$specie->gender->name}}{{$specie->name}}Principal.jpg" alt="{{$specie->gender->name}} {{$specie->name}}" class="img-responsive image1">
                            </a>
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            <h3><a href="/especies/{{$specie->id}}">{{$specie->gender->name}} {{$specie->name}}</a></h3>
                            <p class="price">${{$specie->price}}</p>
                        </div>
                        <!-- /.text -->
                        @foreach($specie->labels as $label)
                            <div class="ribbon sale">
                                <div class="theribbon">{{$label->name}}</div>
                                <div class="ribbon-background"></div>
                            </div>
                        @endforeach
                        <!-- /.ribbon -->
                    </div>
                    <!-- /.product -->
                </div>
                @endforeach
            
        
        <div class="col-md-12">
            <div class="pages">

                <p class="loadMore">
                    <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Cargar más</a>
                </p>

                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <div class="row">
            <div class="col-md-12 banner">
                <a href="#">
                    <img src="img/banner2.jpg" alt="" class="img-responsive">
                </a>
            </div>

        </div>
@endsection