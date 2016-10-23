<div id="treatments" class="col s12">
    {!! Form::model(null,['route'=>['visits.store.treatment', '0'],'method'=>'POST','class'=>'col s12']) !!}
        <div class="row">
            @include('visits.partials.inputs')
            @include('visits.partials.inputs_treatment')
                <div class="button-field col s12">
                        <button class="btn waves-effect waves-light right" type="submit">
                                <i class="material-icons right">send</i>Registrar
                        </button>
                </div>
        </div>
    {!! Form::close() !!}
</div>