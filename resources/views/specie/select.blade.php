<div class="row">
    <fieldset>
        <legend></legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Genero</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="specieTable">
                    @foreach($species as $specie)
                        <tr>
                            <td>{{$specie->name}}</td>
                            <td>{{$specie->gender->name}}</td>
                            <td><a href="/editar/especie/{{$specie->id}}"><button type="button" class="btn btn-xs btn-info" >Editar</button></a></td>
                            <td><a href="/eliminar/especie/{{$specie->id}}" id="deleteSpecie"><button type="button" class="btn btn-xs btn-danger" onclick="check({{$specie->entityCount()}})">Eliminar</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="alert alert-danger" role="alert" id="specieNotFound" style="display: none;">No hay coincidencias con esa búsqueda.</div>
    </fieldset>
</div>