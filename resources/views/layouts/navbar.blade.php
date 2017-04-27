<div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">
    <div class="navbar navbar-default yamm" role="navigation" id="navbar">

        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="index.html">
                    <img src={{ asset("img/logo.jpg")}} alt="Universal logo" class="hidden-xs hidden-sm">
                    <img src={{ asset("img/logo-small.jpg")}} alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                </div>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown use-yamm yamm-fw"> <a href="/" class="dropdown-toggle">Inicio</a> </li>
                    <li class="dropdown use-yamm yamm-fw"> <a href="/especies" class="dropdown-toggle">Herbario</logo></a> </li>
                     @if(Auth::check())
                         <li class="dropdown use-yamm yamm-fw"> <a href="/crear" class="dropdown-toggle">Crear</a> </li>
                         <li class="dropdown use-yamm yamm-fw"> <a href="/editar" class="dropdown-toggle">Editar</a> </li>
                     @endif
                </ul>
            </div>
        </div>

    </div>
</div>