<!doctype html>
<html lang="es">
    @include('generals.header')
<body>

    @include('generals.nav')
    @include('generals.messages')
    @yield('content')
    @include('generals.footer')

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="{{env('DOMAIN')}}js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="{{env('DOMAIN')}}js/materialize.min.js"></script>
    <script type="text/javascript" src="{{env('DOMAIN')}}js/materialize.js"></script>
    <script type="text/javascript" src="{{env('DOMAIN')}}js/plugins.min.js"></script>
    <script>
    $(document).ready(main);

        var is_show = true;

        function main() {
            $('.button-collapse').sideNav({
                        menuWidth: 250, // Default is 240
                        edge: 'left', // Choose the horizontal origin
                        closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
                    }
            );
            $('.button-collapse').onclick(function(e) {
                if (is_show) {
                    $('.button-collapse').sideNav('hide');
                    !is_show;
                } else {
                    $('.button-collapse').sideNav('hide');
                    !is_show;
                }
            });
        }
    </script>
    @yield('scripts')
</body>
</html>