@extends('generals.main')

@section('title_page')
    <title>Yeiplan</title>
@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
@section('content')
    {!! Form::open(['route' => 'services', 'method' =>'get']) !!}
    <div class="input-field col s12" placeholder="place">
        <i class="material-icons prefix">search</i>
        <input id="icon_prefix" type="text" class="validate" name="st" value="{{$st}}">
    </div>
    {!! Form::close() !!}
    <div class="row">

    @foreach($services as $service)

        <div class="col s12 m3">
                <div class="card medium">
                    <div class="card-image">
                        <img src="{{$service->image_service_url}}">
                        <span class="card-title">{{ $service->service_name }}</span>
                    </div>
                    <div class="card-content">
                        <p>{{$service->description_short}}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">Ver más</a>
                    </div>
                </div>
            </div>


    @endforeach

</div>
@endsection
@section('searcher')
    @include('generals.nav_search')
@endsection