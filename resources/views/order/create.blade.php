<form action="/ordenes/crear" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
        <label>Clase
            <select class="form-control" id="class" name="class">
            <option value="0">Selecciona</option>
                @foreach($classes as $class)
                    <option value="{{$class->id}}">{{$class->name}}</option>
                @endforeach
            </select>
        </label>
    </div>

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="name">Descripción</label>
        <textarea class="form-control" id="description" name="description" required></textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Crear</button>
    </div>
</form>