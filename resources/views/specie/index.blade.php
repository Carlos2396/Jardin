@extends('layouts.master')

@section('title')
    Especies
@endsection

@section('content')

    @include('specie.specie_sidebar')

    <div class="col-sm-9">

        <p class="text-muted lead">Nuestro herbario de especies es propio de la región de Cholula en Puebla, contamos con más de 100 especies ...</p>

        <div class="row products">

            <div class="col-md-4 col-sm-6">
                <div class="product">
                    <div class="image">
                        <a href="shop-detail.html">
                            <img src="img/product1.jpg" alt="" class="img-responsive image1">
                        </a>
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <h3><a href="shop-detail.html">Fur coat with very but very very long name</a></h3>
                        <p class="price">$143.00</p>
                        <p class="buttons">
                            <a href="shop-detail.html" class="btn btn-default">View detail</a>
                            <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </p>
                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="product">
                    <div class="image">
                        <a href="shop-detail.html">
                            <img src="img/product2.jpg" alt="" class="img-responsive image1">
                        </a>
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <h3><a href="shop-detail.html">White Blouse Armani</a></h3>
                        <p class="price"><del>$280</del> $143.00</p>
                        <p class="buttons">
                            <a href="shop-detail.html" class="btn btn-default">View detail</a>
                            <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </p>
                    </div>
                    <!-- /.text -->

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
                <!-- /.product -->
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="product">
                    <div class="image">
                        <a href="shop-detail.html">
                            <img src="img/product3.jpg" alt="" class="img-responsive image1">
                        </a>
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <h3><a href="shop-detail.html">Black Blouse Versace</a></h3>
                        <p class="price">$143.00</p>
                        <p class="buttons">
                            <a href="shop-detail.html" class="btn btn-default">View detail</a>
                            <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </p>

                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="product">
                    <div class="image">
                        <a href="shop-detail.html">
                            <img src="img/product3.jpg" alt="" class="img-responsive image1">
                        </a>
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <h3><a href="shop-detail.html">Black Blouse Versace</a></h3>
                        <p class="price">$143.00</p>
                        <p class="buttons">
                            <a href="shop-detail.html" class="btn btn-default">View detail</a>
                            <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </p>

                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="product">
                    <div class="image">
                        <a href="shop-detail.html">
                            <img src="img/product2.jpg" alt="" class="img-responsive image1">
                        </a>
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <h3><a href="shop-detail.html">White Blouse Versace</a></h3>
                        <p class="price">$143.00</p>
                        <p class="buttons">
                            <a href="shop-detail.html" class="btn btn-default">View detail</a>
                            <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </p>

                    </div>
                    <!-- /.text -->

                    <div class="ribbon new">
                        <div class="theribbon">NEW</div>
                        <div class="ribbon-background"></div>
                    </div>
                    <!-- /.ribbon -->
                </div>
                <!-- /.product -->
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="product">
                    <div class="image">
                        <a href="shop-detail.html">
                            <img src="img/product1.jpg" alt="" class="img-responsive image1">
                        </a>
                    </div>
                    <!-- /.image -->
                    <div class="text">
                        <h3><a href="shop-detail.html">Fur coat</a></h3>
                        <p class="price">$143.00</p>
                        <p class="buttons">
                            <a href="shop-detail.html" class="btn btn-default">View detail</a>
                            <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </p>

                    </div>
                    <!-- /.text -->
                </div>
                <!-- /.product -->
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.products -->

        <div class="row">

            <div class="col-md-12 banner">
                <a href="#">
                    <img src="img/banner2.jpg" alt="" class="img-responsive">
                </a>
            </div>

        </div>


        <div class="pages">

            <p class="loadMore">
                <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
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
@endsection