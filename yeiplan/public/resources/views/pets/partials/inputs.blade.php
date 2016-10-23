<h5 class="header2">Datos de la mascota</h5>
<div class="input-field col s12">
    <i class="material-icons prefix">pets</i>
    {!! Form::text('name_pet', null, ['id'=>'name_pet']) !!}
    {!! Form::label('name_pet', 'Nombre') !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">event</i>
    {!! Form::date('birthdate', null, ['id'=>'birthdate', 'class'=>'datepicker', 'placeholder'=>'Fecha de nacimiento']) !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">fitness_center</i>
    {!! Form::text('weight', null, ['id'=>'weight']) !!}
    {!! Form::label('weight', 'Peso') !!}
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">fingerprint</i>
    {!! Form::text('specie', null, ['id'=>'specie']) !!}
    {!! Form::label('specie', 'Especie') !!}
</div>
<div class="file-field input-field col s12">
    <div class="btn">
        <span>Imagen perfil</span>
        {!! Form::file('image_profile') !!}
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">description</i>
    {!! Form::textarea('description', null, ['id'=>'description', 'class'=>'materialize-textarea']) !!}
    {!! Form::label('description', 'Descripción') !!}
</div>