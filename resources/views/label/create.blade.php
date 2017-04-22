
<form action="/etiquetas/crear" method="POST">

    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombre de la etiqueta</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <p>Selecciona las especies a las que deseas asignar esta etiqueta</p>
        </div>
        <div class="col-md-6">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="search" name="search" placeholder="Búsqueda" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <button type="button" class="btn btn-template-main">Buscar</button>
                </div>
            </div>
        </div>

        <hr>
        
        @foreach($species as $specie)
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="{{$specie->name.$specie->id}}">{{$specie->name}}</label>
                    <input type="checkbox" name="{{$specie->id}}" id="{{$specie->name.$specie->id}}" value="1"><br>
                </div>
            </div>
        @endforeach
    </div>
     

    <div class="text-center">
        <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Crear</button>
    </div>
</form>