<ul class="collapsible" data-collapsible="accordion">
    <li>
        <div class="collapsible-header">
            <div class="card horizontal">
                <div class="card-image">
                    <img src="http://www.vetlaguairita.com/imagenes/fotos/servicios-hospitalizacion.jpg" />
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>Datos generales de la visita</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="collapsible-body">
            <div class="card-content">
                <p>Información de la visita</p>
                <p>
                    <a class="waves-effect btn btn-sm modal-trigger amber accent-3" href="{{route('visits.edit', $i)}}"><i class="material-icons tiny left">edit</i>Editar</a>
                    <a class="waves-effect btn btn-sm modal-trigger red accent-3" href="{{route('visits.destroy', $i)}}" data-token="{!! csrf_token() !!}" data-method="delete" data-confirm="Estás seguro de eliminar está visita del expediente?"><i class="material-icons tiny left">delete</i>Eliminar</a>
                </p>
            </div>
        </div>
    </li>
</ul>