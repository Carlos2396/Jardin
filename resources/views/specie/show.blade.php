@extends('layouts.master')

@section('title')
Jardín Etnobotánico Franciso Peláez R. - Herbario
@endsection

@section('content')
    <div class="col-md-12&nbsp;">
        <div class="panel-group accordion" id="accordionThree">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordionThree" href="#clase">
                                Clase: {{$specie->gender->family->order->clase->name}}
                            </a>
                        </h4>
                </div>
                <div id="clase" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1"> <p class="lead">{{$specie->gender->family->order->clase->description}}</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordionThree" href="#order">
                                Orden: {{$specie->gender->family->order->name}}
                            </a>
                        </h4>
                </div>
                <div id="order" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1"> <p class="lead"> {{$specie->gender->family->order->description}} </p></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordionThree" href="#family">
                                Familia: {{$specie->gender->family->name}}
                            </a>
                        </h4>
                </div>
                <div id="family" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                           <div class="col-md-10 col-md-offset-1"> <p class="lead"> {{$specie->gender->family->description}} </p></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordionThree" href="#gender">
                                Género: {{$specie->gender->name}}
                            </a>
                        </h4>
                </div>
                <div id="gender" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                           <div class="col-md-10 col-md-offset-1"> <p class="lead">{{$specie->gender->description}} </p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3>{{$specie->gender->name.' '.$specie->name}}</h3>
        <p class="lead">{{$specie->description}}</p>
    </div>

    <div class="col-md-12">
        <div class="row" id="productMain">

            <div class="col-sm-5">
                <div class="col-sm-12">
                    <div id="mainImage">
                        <img src={{ asset("img/species/" . $specie->gender->name . $specie->name . "1.jpg")}} alt="" class="img-responsive">
                    </div>

                    @foreach($specie->labels as $label)
                        <div class="ribbon sale">
                            <div class="theribbon">{{$label->name}}</div>
                            <div class="ribbon-background"></div>
                        </div>
                    @endforeach
                    <!-- /.ribbon -->
                </div>
                <div class="col-sm-12">
                    <div class="row" id="thumbs">
                    <?php for($i=1; $i <= $specie->images->count()-1; $i++){ ?>
                            <div class="col-xs-4">
                                <a href="http://localhost:8000/img/species/{{$specie->gender->name}}{{$specie->name}}{{$i}}.jpg" class="thumb">
                                    <img src={{ asset("img/species/" . $specie->gender->name . $specie->name . $i . ".jpg")}} alt="" class="img-responsive">
                                </a>
                            </div>
                    <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-7">
                <div class="box">

                    <div class="row">
                        <div class="col-md-5">
                            <h4>Nombres comúnes</h4>
                            <ul>
                                @foreach($specie->names as $name)
                                    <li>{{$name->name}}</li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="col-sm-5">
                            <h4>Inventario</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="colorsTable">
                                        <thead>
                                            <tr>
                                                <th>Color</th>
                                                <th></th>
                                                <th>Cantidad</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($specie->colors as $color)
                                                <tr>
                                                    <td>{{$color->name}}</td>
                                                    <td><input type="color" style="width: 50px;" value="{{$color->rgb}}" disabled></td>
                                                    <td>{{$color->pivot->quantity}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        </div>

                        <div class="col-sm-2">
                            <h4>Precio</h4>
                            <p class="price">${{$specie->price}}</p>
                        </div>
                    </div>
                    
                    <h4>Cuidados de agua</h4>
                    <p>{{$specie->gender->water_care}}</p>
                    <br>

                    <h4>Cuidados de temperatura</h4>
                    <p>{{$specie->gender->temp_care}}</p>
                    <br>

                    <h4>Cuidados de luz</h4>
                    <p>{{$specie->gender->light_care}}</p>
                    <br>
                    
                    <blockquote>
                        <p><em>Cuidados especiales de la especie: </em> <p>{{$specie->especial_care}}</p>
                        </p>
                    </blockquote>
                </div>
            </div>

        </div>
    </div>


@endsection