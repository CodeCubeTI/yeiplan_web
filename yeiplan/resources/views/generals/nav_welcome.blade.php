<div id="navbar" class="navbar-fixed scrollspy">
    <nav class="blue-grey lighten-1">
        <div class="nav-wrapper container">
            <div class="container black-text"> <a href="{{url('/')}}" class="black-text brand-logo"><img src="{{env('APP_URL')}}/images/logoY.png" style="width: 60px; height: 60px;" /></a></div>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            <ul class="right side-nav" id="mobile-demo">
                <li><a class="black-text" href="#contactus">A link</a></li>
                <li><a class="waves-effect waves-light btn" href="{{url('logout')}}">Cerrar sesión</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a class="black-text" href="#contactus">A link</a></li>
                <li><a class="waves-effect waves-light waves-purple btn white black-text" href="{{url('logout')}}">Cerrar sesión</a></li>
            </ul>
        </div>
    </nav>
</div>
