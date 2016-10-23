<div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
        <form class="col s12" method="POST" action="{{ url('login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="row">
                <div class="input-field col s12 center">
                    <img src="{{env('APP_URL')}}/images/logoY.png" alt="" class="circle responsive-img valign profile-image-login">
                    <p class="center login-form-text">{{env('APP_NAME')}}</p>
                </div>
            </div>
            @include('auth.partials.messages')
            <div class="row margin">
                <div class="input-field col s12">
                    <input class="validate" id="email" type="email" name="email">
                    <label for="username" data-error="Inválido">Correo electrónico</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <input id="password" type="password" name="password">
                    <label for="password">Contraseña</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="submit" class="btn waves-effect waves-light col s12" value="Entrar" />
                </div>
            </div>
        </form>
    </div>
</div>
