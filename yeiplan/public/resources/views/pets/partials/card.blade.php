<div class="card medium z-depth-3">
    <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="images/{{rand(1,5)}}.png">
    </div>
    <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Mascota {{$i}}<i class="material-icons right">more_vert</i></span>
        <p><a class="waves-effect btn modal-trigger" href="{{route('visits.create.id', $i)}}">Registrar visita</a></p>
    </div>
    <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Mascota {{$i}}<i class="material-icons right">close</i></span>
        <p>Aquí se mostrará toda la información de la mascota {{$i}}</p>
        <p><a data-target="expedient{{$i}}" class="waves-effect btn btn-sm modal-trigger" href="#expedient{{$i}}"><i class="material-icons tiny left">assignment</i>Expediente</a></p>
        <p><a class="waves-effect btn btn-sm modal-trigger amber accent-3" href="{{route('pets.edit', $i)}}"><i class="material-icons tiny left">edit</i>Editar</a></p>
        <p><a data-target="owners{{$i}}" class="waves-effect btn btn-sm modal-trigger green darken-3" href="#owners{{$i}}"><i class="material-icons tiny left">contacts</i>Propietarios</a></p>
    </div>
</div>