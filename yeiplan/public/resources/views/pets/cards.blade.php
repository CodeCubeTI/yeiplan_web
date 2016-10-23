@extends('generals.main')

@section('title_page')
    <title>Mascotas | Animal's Care</title>
@endsection
@section('styles')
@endsection
@section('scripts')
    <script src="{{env('DOMAIN')}}js/laravel.js"></script>
    <script>
        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal-trigger').leanModal();

            $('.collapsible').collapsible({
                accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
            });
        });
    </script>
@endsection
@section('content')
    <main>
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="row">
            {!! Form::open(['route'=>'index.post', 'method'=>'POST', 'class'=>'col s12']) !!}
                {!! csrf_field() !!}
                <div class="input-field col s12 search-wrapper card z-depth-2" style="position: relative; z-index: 100; top: 0px; height: 100%;">
                    <i class="material-icons prefix">search</i>
                    {!! Form::text('search_pets', null, ['id'=>'search_pets', 'placeholder'=>'Buscar mascota...']) !!}
                </div>
            {!! Form::close() !!}
            @for($i=0; $i<10; $i++)
                <div class="col s12 m4">
                    @include('pets.partials.card')
                </div>
                @include('pets.partials.expedient')
                @include('pets.partials.owners')
            @endfor
        </div>
    </main>
@endsection
