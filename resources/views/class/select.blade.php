
<script>
    function check(x){
        $(document).ready(function() {
            $('a').click(function(event) {
                var id = $(this).prop('id');
                if (id == 'deleteClase') {
                    if(!confirm("Se eliminará(n) "+x+" entidad(es), está seguro de que desea continuar")){
                        event.preventDefault();
                        location.reload();
                    }
                }
            });
        });
    }
</script>

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
                <?php
                    $species = App\Specie::all();
                ?>
                    @foreach($classes as $clase)
                        <tr>
                            <td>{{$clase->name}}</td>
                            <td><a href="/editar/clase/{{$clase->id}}"><button type="button" class="btn btn-xs btn-info" >Editar</button></a></td>
                            <td><a href="/eliminar/clase/{{$clase->id}}" id="deleteClass"><button type="button" class="btn btn-xs btn-danger" onclick="check({{$clase->entityCount()}})">Eliminar</button></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="alert alert-danger" role="alert" id="classNotFound" style="display: none;">No hay coincidencias con esa búsqueda.</div>
    </fieldset>
</div>