<div class="row products" id="Main">
    @if($species->isEmpty())
        <div class="alert alert-info" role="alert">No hay coincidencias de especies con esos criterios de búsqueda.</div>
    @else
        @foreach($species as $specie)
            <div class="col-md-4 col-sm-6">
                <div class="product">
                    <div class="image">
                        <a href="/especies/{{$specie->id}}">
                            <img src="img/species/{{$specie->gender->name}}{{$specie->name}}Principal.jpg" alt="{{$specie->gender->name}} {{$specie->name}}" class="img-responsive image1">
                        </a>
                    </div>

                    <div class="text">
                        <h3><a href="/especies/{{$specie->id}}">{{$specie->gender->name}} {{$specie->name}}</a></h3>
                        <p class="price">${{$specie->price}}</p>
                    </div>
                    
                    @foreach($specie->labels as $label)
                        <div class="ribbon sale">
                            <div class="theribbon">{{$label->name}}</div>
                            <div class="ribbon-background"></div>
                        </div>
                    @endforeach
                </div>
                
            </div>
        @endforeach
    @endif
</div>