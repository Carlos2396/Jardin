<div class="col-sm-3" id="sidebar">
    <form>
        <div class="panel-body">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Search" id="searchInput" onchange="filter()">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-template-main" onclick="filter()"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>

        <div class="panel panel-default sidebar-menu">
            <div class="panel-heading">
                <h3 class="panel-title">Jerarquia</h3>
                <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> <span class="hidden-sm">Limpiar</span></a>
            </div>
            <div class="panel-body">
                    <div class="form-group">
                        <label for="select_order">Clase&nbsp;&nbsp;&nbsp;
                            <select id="select_order" name="class">
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
                            <select name="family">
                                <option value="0">Todas</option>
                                @foreach($families as $family)
                                    <option value="{{$family->id}}">{{$family->name}}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                    <div class="form-group">
                        <label>Género&nbsp;
                            <select name="gender">
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
                                <input type="checkbox"> <span class="colour" style="background: {{$color->rgb}};"></span> {{$color->name}}
                            </label>
                        </div>
                    @endforeach
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-default btn-sm btn-template-main"><i class="fa fa-pencil"></i>Aplicar</button>
        </div>
    </form>
</div>