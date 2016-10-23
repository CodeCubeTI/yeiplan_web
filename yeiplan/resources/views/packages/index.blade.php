@extends('generals.main')

@section('title_page')
    <title>Yeiplan | Paquetes</title>
@endsection
@section('styles')
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>
@endsection
@section('content')
    <main>
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
        </div>
    </main>
@endsection