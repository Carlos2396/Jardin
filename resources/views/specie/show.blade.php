@extends('layouts.master')

@section('title')
Jardín Etnobotánico Franciso Peláez R. - Herbario
@endsection

@section('content')
    <div class="col-md-12&nbsp;">
        <h3>Nombre científico de la especie</h3>
        <p class="lead">Descripción de la planta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus ut elit a cursus. Ut eleifend imperdiet nisi in ultricies. Morbi euismod sed lectus ut tincidunt. Etiam ultrices sem sed lacus hendrerit, id venenatis lacus accumsan. Donec non sapien sed augue commodo interdum. Donec accumsan ex ut urna condimentum, vel venenatis felis tincidunt. Ut felis ante, blandit vel mi et, iaculis accumsan nisi. Nulla orci erat, ornare eu finibus vitae, tincidunt eu tortor. Nulla posuere nisl leo, eget vulputate ante mollis a.
        </p>
    </div>

    <div class="col-md-12">
        <div class="row" id="productMain">
            <div class="col-sm-5">
                <div class="col-sm-12">
                    <div id="mainImage">
                        <img src="img/detailbig1.jpg" alt="" class="img-responsive">
                    </div>

                    <div class="ribbon sale">
                        <div class="theribbon">SALE</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->

                    <div class="ribbon new">
                        <div class="theribbon">NEW</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                </div>
                <div class="col-sm-12">
                    <div class="row" id="thumbs">
                        <div class="col-xs-4">
                            <a href="img/detailbig1.jpg" class="thumb">
                                <img src="img/detailsquare.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="img/detailbig2.jpg" class="thumb">
                                <img src="img/detailsquare2.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="img/detailbig3.jpg" class="thumb">
                                <img src="img/detailsquare3.jpg" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="box">
                    <h4>Nombres comúnes:</h4>
                    <ul>
                        <li>Polyester</li>
                        <li>Machine wash</li>
                    </ul>
                    
                    <div class="sizes">

                        <h4>Colores disponibles</h4>

                        <label for="size_s">
                            <a href="#">S</a>
                            <input type="radio" id="size_s" name="size" value="s" class="size-input">
                        </label>
                        <label for="size_m">
                            <a href="#">M</a>
                            <input type="radio" id="size_m" name="size" value="m" class="size-input">
                        </label>
                        <label for="size_l">
                            <a href="#">L</a>
                            <input type="radio" id="size_l" name="size" value="l" class="size-input">
                        </label>

                    </div>

                    <p class="price">$124.00</p>

                    <h4>Información de la especie</h4>
                    <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>

                    <h4>Cuidados de agua</h4>
                    <ul>
                        <li>Polyester</li>
                        <li>Machine wash</li>
                    </ul>

                    <h4>Cuidados de temperatura</h4>
                    <ul>
                        <li>Regular fit</li>
                        <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                    </ul>

                    <h4>Cuidados de luz</h4>
                    <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                    <br>
                    <blockquote>
                        <p><em>Cuidados especiales de la especie: </em> Esta especie ...
                        </p>
                    </blockquote>
                </div>
            </div>

        </div>
    </div>


@endsection