<div class="row">
    <div class="col-sm-4">
        <form>
            <div class="panel-body">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search" id="colorInput" onchange="filter('color')">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-template-main" onclick="filter('color')"><i class="fa fa-search"></i></button>
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
                        <th>Color</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="colorTable">
                    @foreach($colors as $color)
                        <tr>
                            <td>{{$color->name}}</td>
                            <td><input type="color" class="form-control" style="width: 60px;"  id="color" name="color" value="{{$color->rgb}}" disabled=true ></td>
                            <td><button type="button" class="btn btn-xs btn-info" href="/editar/color/{{$color->id}}">Editar</button></td>
                            <td><button type="button" class="btn btn-xs btn-danger" href="/eliminar/color/{{$color->id}}">Eliminar</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="alert alert-danger" role="alert" id="colorNotFound" style="display: none;">No hay coincidencias con esa búsqueda.</div>
    </fieldset>
</div>