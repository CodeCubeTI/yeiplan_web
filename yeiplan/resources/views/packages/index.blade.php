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
        {!! Form::open(['route' => 'services', 'method' =>'get']) !!}
            <div class="card">
                <div class="input-field col s12" placeholder="place">
                    <i class="material-icons prefix">search</i>
                    <input id="icon_prefix" type="text" class="validate" name="st" value="">
                </div>
            </div>
        {!! Form::close() !!}
        <div class="row">
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
            <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
            <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
            <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
            <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
        </div>
    </main>
@endsection
@section('searcher')
    @include('generals.nav_search')
@endsection