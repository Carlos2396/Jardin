<div id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 contact">
            </div>
            <div class="col-xs-7">
                <div class="social">
                    <a href="https://www.facebook.com/jardinetnobotanico/?fref=ts" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/explore/locations/7607607/" class="external instagram" data-animate-hover="pulse"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/jardinet?lang=es" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/explore/locations/7607607/" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                </div>
                
                @if(Auth::check())
                    <span class="text-uppercase">{{ Auth::user()->name }}</span>
                    <div class="login">
                        <a href="/logout"><i class="fa fa-sign-out"></i> <span class="hidden-xs text-uppercase">Cerrar sesión</span></a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>