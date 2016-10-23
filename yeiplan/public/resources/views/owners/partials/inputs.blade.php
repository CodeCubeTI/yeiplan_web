<h5 class="header2">Datos del propietario</h5>
<div class="input-field col s12">
    <i class="material-icons prefix">person</i>
    {!! Form::text('name', null, ['id'=>'name']) !!}
    {!! Form::label('name', 'Nombre') !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">phone</i>
    {!! Form::text('phone', null, ['id'=>'phone']) !!}
    {!! Form::label('phone', 'Teléfono de contacto') !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">place</i>
    {!! Form::text('address', null, ['id'=>'address']) !!}
    {!! Form::label('address', 'Dirección') !!}
</div>