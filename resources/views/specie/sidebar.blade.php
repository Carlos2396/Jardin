<div class="col-md-3 col-sm-3 col-xs-12"  id="sidebar">
    <form id="search">
        <div class="panel-body">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Buscar" id="searchInput">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main" id="searchButton"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    </form>
    <div class="col-sm-12">
    <form id="filters">
        <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
                <h3 class="panel-title">Jerarquia</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="select_class">Clase</label>
                    <br>
                    <select class="option_select" id="select_class" name="class">
                        <option value="0">Todas</option>
                        @foreach($classes as $class)
                            <option value="{{$class->id}}">{{$class->name}}</option>
                        @endforeach
                    </select>
                    
                </div>

                <div class="form-group">
                    <label for="select_order">Orden</label>
                    <br>
                    <select class="option_select" id="select_order" name="order">
                        <option value="0">Todas</option>
                        @foreach($orders as $order)
                            <option value="{{$order->id}}">{{$order->name}}</option>
                        @endforeach
                    </select>
                    
                </div>

                <div class="form-group">
                    <label>Familia</label>
                    <br>
                    <select name="family" class="option_select" id="select_family">
                        <option value="0">Todas</option>
                        @foreach($families as $family)
                            <option value="{{$family->id}}">{{$family->name}}</option>
                        @endforeach
                    </select>
                    
                </div>

                <div class="form-group">
                    <label>Género</label>
                    <br>
                    <select name="gender" class="option_select" id="select_gender">
                        <option value="0">Todas</option>
                        @foreach($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                        @endforeach
                    </select>
                    
                </div>
            </div>
        </div>
        </div>
        <div class="col-xs-6 col-sm-12">
        <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
                <h3 class="panel-title">Etiquetas</h3>
            </div>
            <div class="panel-body">
                    @foreach($labels as $label)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="label_{{$label->id}}"> {{$label->name}}
                            </label>
                        </div>
                    @endforeach
            </div>
        </div>
        </div>

        <div class="col-xs-6 col-sm-12">
        <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
                <h3 class="panel-title clearfix">Colores</h3>
            </div>
            <div class="panel-body">
                @foreach($colors as $color)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="color_{{$color->id}}"> <span class="colour" style="background: {{$color->rgb}};"></span> {{$color->name}}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
        <div class="text-center">
            <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i>Aplicar</button>
        </div>
    </form>

    <script>
        $(document).ready(function() {
            $("#search").submit(function(e){
                console.log($('#searchInput').val());
                $.get( ("/search?searchInput=" + $('#searchInput').val() ),
                    function(data, status){
                        console.log(data);
                        $('#Main').empty();
                        $('#Main').html(data);
                    }
                );
                e.preventDefault();
            });

            $("#filters").submit(function(e){
                $.get( ("/filter?" + $(this).serialize()),
                    function(data, status){
                        console.log("/filter?" + $("#filters").serialize());
                        console.log(data);
                        $('#Main').empty();
                        $('#Main').html(data);
                    }
                );
                e.preventDefault();
            });

            $("#select_class").change( function(){
                values = "class=" + $("#select_class").val() + "&order= " + $("#select_order").val() + "&family=" + $("#select_family").val() + "&gender=" + $("#select_gender").val();
                $.get( ("/order_options?" + values),
                    function(data){
                        console.log(data);
                        $('#select_order').empty();
                        $('#select_order').html(data);
                    }
                );

                $.get( ("/family_options?" + values),
                    function(data){
                        console.log(data);
                        $('#select_family').empty();
                        $('#select_family').html(data);
                    }
                );

                $.get( ("/gender_options?" + values),
                    function(data){
                        console.log(data);
                        $('#select_gender').empty();
                        $('#select_gender').html(data);
                    }
                );

            });

            $("#select_order").change( function(){
                values = "class=" + $("#select_class").val() + "&order= " + $("#select_order").val() + "&family=" + $("#select_family").val() + "&gender=" + $("#select_gender").val();
                values = "class=" + values;
                $.get( ("/family_options?" + values),
                    function(data){
                        console.log(data);
                        $('#select_family').empty();
                        $('#select_family').html(data);
                    }
                );

                $.get( ("/gender_options?" + values),
                    function(data){
                        console.log(data);
                        $('#select_gender').empty();
                        $('#select_gender').html(data);
                    }
                );

            });

            $("#select_family").change( function(){
                values = "class=" + $("#select_class").val() + "&order= " + $("#select_order").val() + "&family=" + $("#select_family").val() + "&gender=" + $("#select_gender").val();
                $.get( ("/gender_options?" + values),
                    function(data){
                        console.log(data);
                        $('#select_gender').empty();
                        $('#select_gender').html(data);
                    }
                );

            });
        });
    </script>
    <hr>
</div>