<script>
    function filter(){
        var input = document.getElementById("searchInput").value.toLowerCase();
        var children = document.getElementById('speciesList').children;
        var childCount = document.getElementById('speciesList').childElementCount;
        var alert = document.getElementById('notFound');
        var speciesCount = 0;

        for(i = 0; i < childCount; i++){
            var specieLabel = children[i].firstElementChild.firstElementChild.innerHTML.toLowerCase();

            if(specieLabel.includes(input)){
                children[i].style.display = "inline";
                speciesCount++;
            }
            else{
                children[i].style.display = "none";
            }
        }

        if(speciesCount > 0)
            alert.style.display = "none";
        else
            alert.style.display = "block";
    }
</script>

<form action="/etiquetas/crear" method="POST">

    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombre de la etiqueta</label>
        <input type="text" class="form-control" id="labelName" name="name" required>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <p>Selecciona las especies a las que deseas asignar esta etiqueta</p>
        </div>
        <div class="col-sm-4">
            <div class="panel-body">
                
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search" id="searchInput" onchange="filter()">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-template-main" onclick="filter()"><i class="fa fa-search"></i></button>
		                </span>
                    </div>

            </div>
        </div>
    </div>

    <div class="row" id="speciesList">
        @foreach($species as $specie)
            <div class="col-xs-6 col-md-3" style="">
                <div class="form-group">
                    <label for="{{$specie->name.$specie->id}}">{{$specie->name}}</label>
                    <input type="checkbox" name="{{$specie->id}}" id="{{$specie->name.$specie->id}}" value="1"><br>
                </div>
            </div>
        @endforeach
    </div>

    <div class="alert alert-danger" role="alert" id="notFound" style="display: none;">Ninguna especie coincide con esa búsqueda.</div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-template-main">Crear</button>
    </div>
</form>