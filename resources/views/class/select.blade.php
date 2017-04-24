<div class="row">
    <div class="col-sm-4">
        <form>
            <div class="panel-body">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search" id="classInput" onchange="filter('class')">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-template-main" onclick="filter('class')"><i class="fa fa-search"></i></button>
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
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="classTable">
                    @foreach($classes as $class)
                        <tr>
                            <td>{{$class->name}}</td>
                            <td><button type="button" class="btn btn-xs btn-info" href="/editar/clase/{{$class->id}}">Editar</button></td>
                            <td><button type="button" class="btn btn-xs btn-danger" href="/editar/eliminar/{{$class->id}}">Eliminar</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="alert alert-danger" role="alert" id="classNotFound" style="display: none;">No hay coincidencias con esa búsqueda.</div>
    </fieldset>
</div>