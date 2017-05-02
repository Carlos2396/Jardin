<div class="col-sm-3" id="sidebar">
        <div class="panel-body">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search" id="searchInput">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-template-main"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    <form id="filters">
        <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
                <h3 class="panel-title">Jerarquia</h3>
                <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> <span class="hidden-sm">Limpiar</span></a>
            </div>
            <div class="panel-body">
                    <div class="form-group">
                        <label for="select_class">Clase&nbsp;&nbsp;&nbsp;
                            <select id="select_class" name="class">
                                <option value="0">Todas</option>
                                @foreach($classes as $class)
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="select_order">Orden&nbsp;&nbsp;&nbsp;
                            <select id="select_order" name="order">
                                <option value="0">Todas</option>
                                @foreach($orders as $order)
                                    <option value="{{$order->id}}">{{$order->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                    <div class="form-group">
                        <label>Familia&nbsp;
                            <select name="family" id="select_family">
                                <option value="0">Todas</option>
                                @foreach($families as $family)
                                    <option value="{{$family->id}}">{{$family->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                    <div class="form-group">
                        <label>Género&nbsp;
                            <select name="gender" id="select_gender">
                                <option value="0">Todas</option>
                                @foreach($genders as $gender)
                                    <option value="{{$gender->id}}">{{$gender->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
            </div>
        </div>

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
        <div class="text-center">
            <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i>Aplicar</button>
        </div>
    </form>

    <script>
        $(document).ready(function() {
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
                console.log("/order_options?class=" + $("#select_class").val());

                $.get( ("/order_options?class=" + $("#select_class").val() ),
                    function(data){
                        console.log(data);
                        $('#select_order').empty();
                        $('#select_order').html(data);
                    }
                );

                $.get( ("/family_options?class=" + $("#select_class").val() ),
                    function(data){
                        console.log(data);
                        $('#select_family').empty();
                        $('#select_family').html(data);
                    }
                );

                $.get( ("/gender_options?class=" + $("#select_class").val() ),
                    function(data){
                        console.log(data);
                        $('#select_gender').empty();
                        $('#select_gender').html(data);
                    }
                );

            });

            $("#select_order").change( function(){
                console.log("/order_options?order=" + $("#select_order").val());

                $.get( ("/family_options?order=" + $("#select_order").val() ),
                    function(data){
                        console.log(data);
                        $('#select_family').empty();
                        $('#select_family').html(data);
                    }
                );

                $.get( ("/gender_options?order=" + $("#select_order").val() ),
                    function(data){
                        console.log(data);
                        $('#select_gender').empty();
                        $('#select_gender').html(data);
                    }
                );

            });

            $("#select_family").change( function(){

                $.get( ("/gender_options?family=" + $("#select_family").val() ),
                    function(data){
                        console.log(data);
                        $('#select_gender').empty();
                        $('#select_gender').html(data);
                    }
                );

            });
        });
    </script>
</div>