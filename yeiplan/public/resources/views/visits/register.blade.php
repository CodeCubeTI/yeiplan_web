@extends('generals.main')

@section('title_page')
    <title>Registrar visita | Animal's Care</title>
@endsection
@section('styles')
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs();
        });
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    </script>
@endsection
@section('content')
    <main>
        <div class="row">
            <div class="col offset-s0 s12 offset-m0 m12 offset-m0 l12">
                <div class="card-panel hoverable">
                    <div class="row">
                        <ul class="tabs card">
                            <li class="tab col s3"><a class="active" href="#esthetics">Estética</a></li>
                            <li class="tab col s3"><a href="#hospitalizations">Hospitalización</a></li>
                            <li class="tab col s3"><a href="#treatments">Tratamiento</a></li>
                        </ul>
                    </div>
                    <div class="row">
                        @include('visits.tabs.esthetics')
                        @include('visits.tabs.hospitalizations')
                        @include('visits.tabs.treatments')
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection