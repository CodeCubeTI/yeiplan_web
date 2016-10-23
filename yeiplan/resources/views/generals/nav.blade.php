<div id="navbar" class="navbar-fixed scrollspy">
    <nav class="green accent-3">
        <div class="nav-wrapper container">
            <div class="black-text left"> <a href="{{url('/')}}" class="black-text brand-logo"><img src="{{env('APP_URL')}}/images/logo_trans2.png" style="width: 60px; height: 60px;" /></a></div>
            <ul class="right side-nav" id="slide-out">
                <li><div class="waves-effect waves-light waves-purple"><a class="black-text" href="#features">Características</a></div></li>
                <li><div class="waves-effect waves-light waves-purple"><a class="black-text" href="#aboutus">Nosotros</a></div></li>
                <li><div class="waves-effect waves-light waves-purple"><a class="black-text" href="#contactus">Contáctanos</a></div></li>
                <li><div class="divider"></div></li>
                <li><a class="black-text" href="{{url('logout')}}">Cerrar sesión</a></li>

            </ul>
            @yield('searcher')

            <ul class="right hide-on-med-and-down">
                <li><a class="black-text" href="#features">Características</a></li>
                <li><a class="black-text" href="#aboutus">Nostros</a></li>
                <li><a class="black-text" href="#contactus">Contáctanos</a></li>
                <li><a class="waves-effect waves-light waves-purple btn white black-text" href="{{url('logout')}}">Inicia sesión</a></li>
                <li><a class="waves-effect waves-light waves-white btn purple white-text" href="{{url('logout')}}">Regístrate</a></li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse black-text text-accent-4"><i class="material-icons">menu</i></a>
        </div>

    </nav>
</div>


