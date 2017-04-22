
<form action="/etiquetas/crear" method="POST">

    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombre de la etiqueta</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <p>Selecciona las especies a las que deseas asignar esta etiqueta</9>
        </div>
        <div class="col-md-6">
            <div class="col-md-6">
                <input type="text" class="form-control" id="search" name="search" placeholder="Búsqueda" required>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-template-main">Buscar</button>
            </div>
        </div>
        <hr>
    </div>
    
    <div class="form-group">
                @foreach($species as $specie)
                    <div class="col-md-3">
                        <label for="checkbox">{{$specie->name}}
                            <input type="checkbox" name="{{$specie->id}}" value="1"><br>
                        </label>
                    </div>
                @endforeach
    </div>
     

    <div class="text-center">
        <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Crear</button>
    </div>
</form>