<div id="expedient{{$i}}" class="modal" style="width: 90%; height: 90%;">
    <div class="modal-content">
        <h4>Mascota {{$i}}</h4>
        <p>Expediente de la mascota</p>
        @include('pets.expedient.visits')
    </div>
    <div class="modal-footer">
        <a class="btn btn-sm modal-action modal-close waves-effect waves-green btn-flat red lighten-4">Cerrar</a>
    </div>
</div>