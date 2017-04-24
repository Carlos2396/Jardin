@extends('layouts.master')

@section('title')
Crear
@endsection

@section('content')
    <script>
        function filter(name){
            var input = document.getElementById(name + 'Input').value.toLowerCase();
            var children = document.getElementById(name + 'Table').children;
            var childCount = document.getElementById(name + 'Table').childElementCount;
            var alert = document.getElementById(name + 'NotFound');
            var count = 0;

            for(i = 0; i < childCount; i++){
                var child = children[i].firstElementChild.innerHTML.toLowerCase();

                if(child.includes(input)){
                    children[i].style.display = "inline";
                    count++;
                }
                else{
                    children[i].style.display = "none";
                }
            }

            if(count > 0)
                alert.style.display = "none";
            else
                alert.style.display = "block";
        }
    </script>

    <div class="tabs">
        <ul class="nav nav-pills nav-justified">
            <li class="active"><a href="#clase" data-toggle="tab">Clase</a>
            </li>
            <li><a href="#orden" data-toggle="tab">Ordenes</a>
            </li>
            <li><a href="#familia" data-toggle="tab">Familias</a>
            </li>
            <li><a href="#genero" data-toggle="tab">Géneros</a>
            </li>
            <li><a href="#especie" data-toggle="tab">Especies</a>
            </li>
            <li><a href="#color" data-toggle="tab">Colores</a>
            </li>
            <li><a href="#etiqueta" data-toggle="tab">Etiquetas</a>
            </li>
        </ul>
        <div class="tab-content tab-content-inverse">
            <div class="tab-pane active" id="clase">
                @include('class.select')
            </div>
            <!-- /.tab -->

            <div class="tab-pane" id="orden">
                 @include('order.select')
            </div>
            <!-- /.tab -->

            <div class="tab-pane" id="familia">
                 @include('family.select')
            </div>
            <!-- /.tab -->

            <div class="tab-pane" id="genero">
                 @include('gender.select')
            </div>
            <!-- /.tab -->

            <div class="tab-pane" id="especie">
                @include('specie.select')
            </div>
            <!-- /.tab -->

            <div class="tab-pane" id="color">
                 @include('color.select')
            </div>
            <!-- /.tab -->

            <div class="tab-pane" id="etiqueta">
                @include('label.select')
            </div>
            <!-- /.tab -->
        </div>
    </div>
@endsection