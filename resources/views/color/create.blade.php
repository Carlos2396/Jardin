
<form action="/color/crear" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="color">Selecciona el color</label>
        <input type="color"  id="color" name="color" required>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Crear</button>
    </div>

</form>