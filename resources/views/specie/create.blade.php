<script>
    var nameCount = 1;
    var colorCount = 1;

    function addName(){
        var table = document.getElementById("namesTable");
        var row = table.insertRow();
        var nameCell = row.insertCell(0);
        nameCell.innerHTML = "<input type=\"text\" placeholder=\"Nombre\" class=\"form-control\" name=\"coloquial_"+nameCount+"\" required>";
        nameCount++;
    }

    function removeName(){
        var table = document.getElementById("namesTable");
        table.deleteRow(nameCount);

        if(nameCount > 0)
            nameCount--;
    }

    function addColor(){
        var colorshtml = document.getElementById("colorsSelect").parentElement.innerHTML;
        var table = document.getElementById("colorsTable");
        var row = table.insertRow();
        var colorCell = row.insertCell(0);
        var quantityCell = row.insertCell(1);
        
        quantityCell.innerHTML = "<input type=\"number\" step=\"1\" min=\"0\" max=\"10000\" class=\"form-control\" style=\"width: 110px;\" name=\"quantity_"+colorCount+"\" required>";
        colorCell.innerHTML = colorshtml;

        var colorSelect = colorCell.firstElementChild;
        colorSelect.name = "color_" + colorCount;
       
        colorCount++;
    }

    function removeColor(){
        if(colorCount > 1){
            var table = document.getElementById("colorsTable");
            table.deleteRow(colorCount);
            colorCount--;
        }
    }

</script>

<form action="/especies/crear" method="POST">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="name">Nombre científico</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="price">Precio ($MXN) </label>
                <input type="number" step="0.10" min="0" max="99999" class="form-control" id="price" name="price" required>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="gender">Género
                    <select class="form-control" id="gender" name="gender">
                        <option value="0">Selecciona</option>
                        @foreach($genders as $gender)
                            <option value="{{$gender->id}}">{{$gender->name}}</option>
                        @endforeach
                    </select>
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="name">Descripción</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>

    <div class="form-group">
            <label for="special_care">Cuidados especiales</label>
            <textarea class="form-control" id="special_care" name="special_care" required></textarea>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <fieldset>
                <legend>Nombres coloquiales</legend>
                <div class="table-responsive">
                    <table class="table table-hover" id="namesTable">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>
                                    <button type="button" class="btn btn-xs btn-success" onclick="addName()">+</button>
                                    <button type="button"  class="btn btn-xs btn-danger" onclick="removeName()">-</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" placeholder="Nombre" class="form-control" name="coloquial_0" required></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>

        <div class="col-sm-4">
            <fieldset>
                <legend>Inventario</legend>
                <div class="table-responsive">
                    <table class="table table-hover" id="colorsTable">
                        <thead>
                            <tr>
                                <th>Color</th>
                                <th>Cantidad</th>
                                <th>
                                    <button type="button" class="btn btn-xs btn-success" onclick="addColor()">+</button>
                                    <button type="button"  class="btn btn-xs btn-danger" onclick="removeColor()">-</button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-control" id="colorsSelect" name="color_0">
                                        <option value="0">Selecciona</option>
                                        @foreach($colors as $color)
                                            <option value="{{$color->id}}">{{$color->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td><input type="number" step="1" min="0" max="10000" class="form-control" style="width: 110px;" name="quantity_0" required></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>

        <div class="col-sm-4">
            <fieldset>
                <legend>Imágenes</legend>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Archivo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Catálogo</td>
                                <td><input type="file" name="img1"></td>
                            </tr>
                            <tr>
                                <td>Detalle 1</td>
                                <td><input type="file" name="img2"></td>
                            </tr>
                            <tr>
                                <td>Detalle 2</td>
                                <td><input type="file" name="img3"></td>
                            </tr>
                            <tr>
                                <td>Detalle 3</td>
                                <td><input type="file" name="img4"></td>
                            </tr>
                            <tr>
                                <td>Detalle 4</td>
                                <td><input type="file" name="img5"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-template-main">Crear</button>
    </div>
</form>

