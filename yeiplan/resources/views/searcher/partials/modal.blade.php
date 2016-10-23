<div id="detail_{{$service->id}}" class="modal" style="width: 90%; height: 90%;">
    <div class="modal-content">
        <div class="col s12 m12">
            <h2 class="header">{{ $service->service_name }}</h2>
            <div class="card horizontal">
                <div class="card-image">
                    <img src="{{$service->image_service_url}}" style="width: 100%; height: 100%;">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <p>{{$service->description}}</p>
                        <br/>
                        <p><h5 class="green-text text-accent-2 strong">${{$service->price}}</h5></p>
                    </div>
                    <div class="card-action">
                        <a href="#">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-sm modal-action modal-close waves-effect waves-green btn-flat red lighten-4">Cerrar</a>
    </div>
</div>