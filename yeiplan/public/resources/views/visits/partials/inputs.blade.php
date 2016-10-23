<h5 class="header2">Datos de la visita</h5>
<div class="input-field col s12">
    <i class="material-icons prefix">description</i>
    {!! Form::textarea('description', null, ['id'=>'description', 'class'=>'materialize-textarea']) !!}
    {!! Form::label('description', 'Descripción') !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">event</i>
    {!! Form::date('date', null, ['id'=>'date', 'data-value'=>'new Date()', 'class'=>'datepicker', 'placeholder'=>'Fecha de la visita']) !!}
</div>