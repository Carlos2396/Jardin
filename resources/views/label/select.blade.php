<div class="row">
    <div class="col-sm-4">
        <form>
            <div class="panel-body">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search" id="labelInput" onchange="filter('label')">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-template-main" onclick="filter('label')"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <fieldset>
        <legend></legend>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Etiqueta</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="labelTable">
                    @foreach($labels as $label)
                        <tr>
                            <td>{{$label->name}}</td>
                            <td><a href="/editar/etiqueta/{{$label->id}}"><button type="button" class="btn btn-xs btn-info" >Editar</button></a></td>
                            <td><a href="/eliminar/etiqueta/{{$label->id}}" id="deleteLabel"><button type="button" class="btn btn-xs btn-danger" onclick="check({{$label->entityCount()}})">Eliminar</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="alert alert-danger" role="alert" id="labeNotFound" style="display: none;">No hay coincidencias con esa búsqueda.</div>
    </fieldset>
</div>