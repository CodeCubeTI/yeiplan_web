<div id="owners{{$i}}" class="modal" style="width: 90%;">
    <div class="modal-content">
        <h4>Mascota {{$i}}</h4>
        <p>Propietarios de la mascota</p>
        @include('pets.owners.owner')
    </div>
    <div class="modal-footer white-text">
        <a class="btn btn-sm modal-action modal-close waves-effect btn-flat red lighten-4">Cerrar</a>
        <a href="{{route('owners.create')}}" class="btn btn-sm modal-action modal-close waves-effect light-blue darken-4"><i class="material-icons left">add</i>Agregar propietario</a>
    </div>
</div>