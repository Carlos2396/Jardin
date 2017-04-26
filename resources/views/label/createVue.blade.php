<form action="/etiquetas/crear" method="POST" >
<div id="app">
    @{{$data | json}}
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
                    <input type="search" class="form-control" placeholder="Search" id="searchInput" onchange="filter()" v-model="input">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-template-main" onclick="filter()"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        @foreach($species as $specie)
            <specie specie="{{ json_encode($specie) }}"></specie>
        @endforeach
    </div>

    <div class="alert alert-danger" role="alert" id="notFound" style="display: none;">Ninguna especie coincide con esa búsqueda.</div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-template-main">Crear</button>
    </div>

    <template id="specie-template">
        <div class="col-xs-6 col-md-3">
            @{{$data | json}}
            <label for="@{{specie.name}}.@{{specie.id}}">@{{ specie.name }}</label>
            <input type="checkbox" name="@{{specie.id}}" id="@{{specie.name}}.@{{specie.id}}">
        </div>
    </template>
</div>
</form>

<script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.8/vue.js"></script>

<script src="/js/search.js"></specie>