
<form action="/etiquetas/crear" method="POST">

    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombre de la etiqueta</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="row">
        <div class="col-md-8">
            <p>Selecciona las especies a las que deseas asignar esta etiqueta</p>
        </div>
        <div class="col-md-4">
            <div class="panel-body">
                <form role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

		                </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="row">
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