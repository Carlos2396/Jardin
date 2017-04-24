<form action="/clases/crear" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="name">Descripción</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-template-main">Crear</button>
    </div>
</form>