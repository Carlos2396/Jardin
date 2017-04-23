
<form action="/color/crear" method="POST">
    {{ csrf_field() }}

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <label for="color">Selecciona el color</label>
                <input type="color" class="form-control" style="width: 60px;"  id="color" name="color" required>
            </div>
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-template-main">Crear</button>
    </div>

</form>