@extends('generals.main')

@section('title_page')
    <title>Yeiplan</title>
@endsection
@section('styles')
@endsection
@section('scripts')
@endsection
@section('content')
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