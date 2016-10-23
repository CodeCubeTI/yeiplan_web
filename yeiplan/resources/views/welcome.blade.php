@extends('generals.main')

@section('title_page')
    <title>Yeiplan | Inicio</title>
@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
@section('content')
    <main>
        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                    <br><br>
                    <h1 class="header center teal-text text-lighten-2"><img src="{{env('APP_URL')}}/images/logo_bannertrans_home.png" style="width: 100%"/></h1>
                    <div class="row center">
                        <h5 class="header col s12 light"><strong>Eventos exprés | Libérate del estrés</strong></h5>
                    </div>
                    {!! Form::open(['route' => 'services', 'method' => 'get']) !!}
                        <div class="input-field col s6" placeholder="place">
                            <i class="material-icons prefix">search</i>
                            <input id="icon_prefix" type="text" class="validate" name="st">
                        </div>
                    {!! Form::close() !!}
                    <br><br>
                </div>
            </div>
            <div class="parallax"><img src="{{env('APP_URL')}}/images/parallax4.png" alt="Unsplashed background img 2" style="background-image: url(&quot;images/dream-infrared-meadow-2220-824x550.jpg&quot;); bottom: -241.193px; display: block; opacity: 0.4;"></div>
        </div>
        <div class="container" >
            <div class="section scrollspy" id="features">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <p class="center"><i class="material-icons large cyan-text">sentiment_very_satisfied</i></p>
                            <h2 class="center" style="color:#333"><i class="mdi-av-new-releases"></i></h2>
                            <h5 class="center">¡Libérate del estrés!</h5>
                            <p class="light">No te desgastes ni te estreses a la hora de planear tu evento, nosotros lo hacemos por ti.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <p class="center"><i class="material-icons large cyan-text">alarm</i></p>
                            <h2 class="center" style="color:#333"><i class="mdi-hardware-cast"></i></h2>
                            <h5 class="center">¡Ahorra tiempo y energia!</h5>
                            <p class="light">Yeiplan te brinda de manera rápida y directa todo lo que necesitas para planear tu evento. </p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <p class="center"><i class="material-icons large cyan-text">monetization_on</i></p>
                            <h2 class="center" style="color:#333"><i class="mdi-hardware-keyboard-alt"></i></h2>
                            <h5 class="center">¿Forma de pago?...</h5>
                            <p class="light"><strong>¡No te preocupes!</strong> Nuestro sistema te permite pagar con tarjeta o efectivo. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <p class="center"><i class="material-icons large cyan-text">star</i></p>
                            <h2 class="center" style="color:#333"><i class="mdi-hardware-keyboard-alt"></i></h2>
                            <h5 class="center">¿Quieres algo aún más simple?</h5>
                            <p class="light">Nosotros tenemos paquetes básicos para cubrir diferentes celebraciones.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <p class="center"><i class="material-icons large cyan-text">palette</i></p>
                            <h2 class="center" style="color:#333"><i class="mdi-hardware-keyboard-alt"></i></h2>
                            <h5 class="center">¿Quieres personalizar tu evento?</h5>
                            <p class="light">Nosotros te ayudamos a plasmar tu estilo con detalles hechos a tu medida. </p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <p class="center"><i class="material-icons large cyan-text">shopping_cart</i></p>
                            <h2 class="center" style="color:#333"><i class="mdi-hardware-keyboard-alt"></i></h2>
                            <h5 class="center">¡Crea tu propio paquete!</h5>
                            <p class="light">Hazlo en base a tu presupuesto y/o gustos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax-container valign-wrapper section scrollspy" id="aboutus">
            <div class="section no-pad-bot">
                <div class="container">
                    <div class="center row col s3">
                        <h3>Sobre nosotros...</h3>
                    </div>
                    <div class="center row col s12">
                        <p><strong>Yeiplan es una empresa productora de eventos exprés, como cumpleaños, reuniones familiares, aniversarios, entre otros. Nosotros te ayudamos a producir un evento de calidad en una escala pequeña.</strong></p>
                    </div>
                </div>
            </div>
            <div class="parallax"><img src="{{env('APP_URL')}}/images/parallax3.png" alt="img" style="background-image: url(&quot;images/1423255813yuwjj.jpg&quot;); display: block; bottom: -70.3798px; opacity: 0.7;"></div>
        </div>
        <div class="container section scrollspy" id="contactus">
            <div class="section">
                <br>
                <br>
                <h2>¡Contáctanos!</h2>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s4">
                                    <input id="name" type="text" class="validate">
                                    <label for="name">Escribe tu nombre</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="email" type="email" class="validate">
                                    <label for="email">Escribe tu cuenta de correo electrónico</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="message-sub" type="email" class="validate">
                                    <label for="message-sub">Escribe tu asunto</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="text_area" class="materialize-textarea"></textarea>
                                    <label for="text_area">Escribe tu mensaje</label>
                                </div>
                            </div>
                            <div class="row">
                                <a class="waves-effect waves-light btn purple lighten-1 white-text" href="#">Enviar Mensaje<i class="mdi-content-send right"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="hiddendiv common" style="width: 563px;"></div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div><div class="drag-target" style="left: 0px; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
    </main>
@endsection