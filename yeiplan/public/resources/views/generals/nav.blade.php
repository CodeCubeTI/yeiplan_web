<nav class="white lighten-3 z-depth-2">
    <form name="logout_form" method="POST" action="{{ url('logout') }}">
        {!! csrf_field() !!}
        <div class="nav-wrapper">
            <a href="{{ route('index') }}" class="brand-logo right cyan-text text-accent-4"><i class="material-icons right">pets</i>Animal's Care</a>
            <ul id="slide-out" class="side-nav">
                <li><a class="waves-effect black-text text-accent-4" href="{{ route('index') }}"><i class="material-icons">home</i>Inicio</a></li>
                <li><a class="waves-effect black-text text-accent-4" href="{{route('pets.create')}}"><i class="material-icons left">pets</i>Registrar mascota</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect black-text text-accent-4" href="javascript:document.logout_form.submit()"><i class="material-icons left">exit_to_app</i>Cerrar sesión</a></li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a class="waves-effect black-text text-accent-4" href="{{route('index')}}"><i class="material-icons left">home</i>Inicio</a></li>
                <li><a class="waves-effect black-text text-accent-4" href="{{route('pets.create')}}"><i class="material-icons left">pets</i>Registrar mascota</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect black-text text-accent-4" href="javascript:document.logout_form.submit()"><i class="material-icons left">exit_to_app</i>Cerrar sesión</a></li>
            </ul>
            <a href="#" data-activates="slide-out" class="button-collapse black-text text-accent-4"><i class="material-icons">menu</i></a>
        </div>
    </form>
</nav>
