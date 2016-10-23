@extends('generals.main')

@section('title_page')
    <title>Editar mascota | Animal's Care</title>
@endsection
@section('styles')
@endsection
@section('scripts')
    <script>
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
                        {!! Form::model(null,['route'=>['visits.update', '0'],'method'=>'PUT', 'class'=>'col s12']) !!}
                        <div class="row">
                            @include('visits.partials.inputs')
                            @include('visits.partials.inputs_hospitalization')
                            <div class="button-field col s12">
                                <button class="btn waves-effect waves-light right" type="submit">
                                    <i class="material-icons right">update</i>Actualizar
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection