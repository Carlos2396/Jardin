<div class="row products" id="Main">
    @foreach($species as $specie)
        <div class="col-md-4 col-sm-6">
            <div class="product">
                <div class="image">
                    <a href="/especies/{{$specie->id}}">
                        <img src="img/species/{{$specie->gender->name}}{{$specie->name}}Principal.jpg" alt="{{$specie->gender->name}} {{$specie->name}}" class="img-responsive image1">
                    </a>
                </div>
                <!-- /.image -->
                <div class="text">
                    <h3><a href="/especies/{{$specie->id}}">{{$specie->gender->name}} {{$specie->name}}</a></h3>
                    <p class="price">${{$specie->price}}</p>
                </div>
                <!-- /.text -->
                @foreach($specie->labels as $label)
                    <div class="ribbon sale">
                        <div class="theribbon">{{$label->name}}</div>
                        <div class="ribbon-background"></div>
                    </div>
                @endforeach
                <!-- /.ribbon -->
            </div>
            <!-- /.product -->
        </div>
    @endforeach
</div>