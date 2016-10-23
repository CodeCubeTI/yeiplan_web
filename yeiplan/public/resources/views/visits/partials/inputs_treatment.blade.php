<div class="input-field col s12">
    <i class="material-icons prefix">today</i>
    {!! Form::text('days', null, ['id'=>'days']) !!}
    {!! Form::label('days', 'Días') !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">control_point</i>
    {!! Form::text('appointment', null, ['id'=>'appointment']) !!}
    {!! Form::label('appointment', 'No. de citas') !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">local_hospital</i>
    {!! Form::textarea('medicine', null, ['id'=>'medicine', 'class'=>'materialize-textarea']) !!}
    {!! Form::label('medicine', 'Medicina') !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">subject</i>
    {!! Form::textarea('recomendation', null, ['id'=>'recomendation', 'class'=>'materialize-textarea']) !!}
    {!! Form::label('recomendation', 'Recomendación') !!}
</div>