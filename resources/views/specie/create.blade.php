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
        <textarea class="form-control" id="description" name="description" required>
        </textarea>
    </div>

    <div class="form-group">
            <label for="special_care">Cuidados especiales</label>
            <textarea class="form-control" id="special_care" name="special_care" required>
            </textarea>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <fieldset>
                <legend>Inventario</legend>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Color</th>
                                <th>Cantidad</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-control" id="order" name="order">
                                        <option value="0">Selecciona</option>
                                        @foreach($colors as $color)
                                            <option value="{{$color->id}}">{{$color->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td><input type="number" step="1" min="0" max="10000" class="form-control" name="#" required></td>
                                <td><a class="btn btn-xs btn-danger" onclick="">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>
             <div class="text-center">
                <button type="button" class="btn btn-xs btn-success">Agregar color</button>
            </div>
        </div>

        <div class="col-sm-4">
            <fieldset>
                <legend>Nombres coloquiales</legend>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control" name="coloquial" required></td>
                                <td><a class="btn btn-xs btn-danger" onclick="">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>
            <div class="text-center">
                <button type="button" class="btn btn-xs btn-success">Agregar nombre</button>
            </div>
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
                                <td><input type="file" name="img1" accept="image/*"></td>
                            </tr>
                            <tr>
                                <td>Detalle 1</td>
                                <td><input type="file" name="img2" accept="image/*"></td>
                            </tr>
                            <tr>
                                <td>Detalle 2</td>
                                <td><input type="file" name="img3" accept="image/*"></td>
                            </tr>
                            <tr>
                                <td>Detalle 3</td>
                                <td><input type="file" name="img4" accept="image/*"></td>
                            </tr>
                            <tr>
                                <td>Detalle 4</td>
                                <td><input type="file" name="img5" accept="image/*"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Crear</button>
    </div>
</form>