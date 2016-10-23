<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="{{env('DOMAIN')}}images/logo_trans.png" />

    @yield('title_page')

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{env('DOMAIN')}}css/materialize.min.css" type="text/css" rel="stylesheet"  media="screen,projection"/>
    <link href="{{env('DOMAIN')}}css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .parallax-container {
            height: 100%;
        }
    </style>
    @yield('styles')

</head>