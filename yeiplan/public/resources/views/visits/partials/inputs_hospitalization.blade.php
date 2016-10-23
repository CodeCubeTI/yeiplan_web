<div class="input-field col s12">
    <i class="material-icons prefix">subject</i>
    {!! Form::textarea('diagnostic', null, ['id'=>'diagnostic', 'class'=>'materialize-textarea']) !!}
    {!! Form::label('diagnostic', 'Diagnóstico') !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">subject</i>
    {!! Form::textarea('pronostic', null, ['id'=>'pronostic', 'class'=>'materialize-textarea']) !!}
    {!! Form::label('pronostic', 'Pronóstico') !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">colorize</i>
    {!! Form::text('test', null, ['id'=>'test']) !!}
    {!! Form::label('test', 'Prueba') !!}
</div>
<hr align="left" noshade="noshade" size="2" width="100%" />
<h5 class="header2">Tratamiento</h5>
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