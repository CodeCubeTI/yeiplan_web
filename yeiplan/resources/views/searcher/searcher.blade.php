@extends('generals.main')

@section('title_page')
    <title>Yeiplan</title>
@endsection
@section('styles')
@endsection
@section('scripts')
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
                    <a data-target="detail_{{$service->id}}" class="modal-trigger" href="#detail_{{$service->id}}">Ver más</a>
                </div>
            </div>
        </div>
        @include('searcher.partials.modal')
    @endforeach

</div>
@endsection
@section('searcher')
    @include('generals.nav_search')
@endsection