<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Herbario</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href={{ asset("css/animate.css")}} rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href={{ asset("css/style.green.css")}} rel="stylesheet" d="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href={{ asset("css/custom.css")}} rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
</head>

<body>
    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            @include('layouts.header')

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->


            <!-- *** NAVBAR END *** -->

        </header>
        
        @include('layouts.navbar')

        <section class="bar background-image-fixed-2 no-mb color-white text-center">
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Bienvenido al herbario de nuestro jardín</h1>

                        <p class="lead">Esperamos que la información brindada te sea de utilidad.</p>

                        <a href="/especies"><button type="button" class="btn btn-lg btn-success" >Ir al herbario</button></a>

                    </div>
                </div>
            </div>
        </section>

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>Visita nuestro sitio y conoce más de nuestro jardín etnobotánico</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="http://www.jardinetnobotanico.org/" class="btn btn-template-transparent-primary">Link al sitio del jardin</a>
                </div>
            </div>
        </div>

        @include('layouts.footer')


    </div>
    <!-- /#all -->


    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    



</body>

</html>