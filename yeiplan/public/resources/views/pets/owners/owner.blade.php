<table class="hoverable responsive-table">
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th colspan="2">Acciones</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nestor</td>
            <td>234544234</td>
            <td>Calle #334 Col. Colonia</td>
            <td>
                <a class="waves-effect btn btn-sm modal-trigger amber accent-3" href="{{route('owners.edit', $i)}}"><i class="material-icons tiny left">edit</i>Editar</a>
            </td>
            <td>
                <a class="waves-effect btn btn-sm modal-trigger red accent-3" href="{{route('owners.destroy', $i)}}" data-token="{!! csrf_token() !!}" data-method="delete" data-confirm="Estás seguro de eliminar el propietario?"><i class="material-icons tiny left">delete</i>Eliminar</a>
            </td>
        </tr>
        <tr>
            <td>Nestor</td>
            <td>234544234</td>
            <td>Calle #334 Col. Colonia</td>
            <td>
                <a class="waves-effect btn btn-sm modal-trigger amber accent-3" href="{{route('owners.edit', $i)}}"><i class="material-icons tiny left">edit</i>Editar</a>
            </td>
            <td>
                <a class="waves-effect btn btn-sm modal-trigger red accent-3" href="{{route('owners.destroy', $i)}}" data-token="{!! csrf_token() !!}" data-method="delete" data-confirm="Estás seguro de eliminar el propietario?"><i class="material-icons tiny left">delete</i>Eliminar</a>
            </td>
        </tr>
    </tbody>
</table>