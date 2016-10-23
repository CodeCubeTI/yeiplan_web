@if (count($errors))
    <ul>
        @foreach($errors->all() as $error)
            <li>
                <div id="card-alert" class="card red lighten-5">
                    <div class="card-content red-text">
                        <p>{{ $error }}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endif