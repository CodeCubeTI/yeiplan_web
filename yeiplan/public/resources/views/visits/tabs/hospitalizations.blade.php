<div id="hospitalizations" class="col s12">
    {!! Form::model(null,['route'=>['visits.store.hospitalization', '0'],'method'=>'POST','class'=>'col s12']) !!}
        <div class="row">
            @include('visits.partials.inputs')
            @include('visits.partials.inputs_hospitalization')
                <div class="button-field col s12">
                        <button class="btn waves-effect waves-light right" type="submit">
                                <i class="material-icons right">send</i>Registrar
                        </button>
                </div>
        </div>
    {!! Form::close() !!}
</div>