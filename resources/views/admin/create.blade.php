@extends('layouts.master')

@section('title')
Crear
@endsection

@section('content')
<div class="tabs">
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#clase" data-toggle="tab">Clase</a>
                                </li>
                                <li><a href="#orden" data-toggle="tab">Orden</a>
                                </li>
                                <li><a href="#familia" data-toggle="tab">Familia</a>
                                </li>
                                <li><a href="#genero" data-toggle="tab">Género</a>
                                </li>
                                <li><a href="#especie" data-toggle="tab">Especie</a>
                                </li>
                                <li><a href="#color" data-toggle="tab">Color</a>
                                </li>
                                <li><a href="#etiqueta" data-toggle="tab">Etiqueta</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-inverse">
                                <div class="tab-pane active" id="clase">
                                   @include('class.create')
                                </div>
                                <!-- /.tab -->

                                <div class="tab-pane" id="orden">
                                    @include('order.create')
                                </div>
                                <!-- /.tab -->

                                <div class="tab-pane" id="familia">
                                    @include('family.create')
                                </div>
                                <!-- /.tab -->

                                <div class="tab-pane" id="genero">
                                    @include('gender.create')
                                </div>
                                <!-- /.tab -->

                                <div class="tab-pane" id="especie">
                                    @include('specie.create')
                                </div>
                                <!-- /.tab -->

                                <div class="tab-pane" id="color">
                                    @include('color.create')
                                </div>
                                <!-- /.tab -->

                                <div class="tab-pane" id="etiqueta">
                                    @include('label.create')
                                </div>
                                <!-- /.tab -->
                            </div>
                        </div>
@endsection