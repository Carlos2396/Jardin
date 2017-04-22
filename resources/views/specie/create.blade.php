<form action="/especies/crear" method="POST">
    {{ csrf_field() }}
    
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

    <div class="col-sm-4">
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" step="0.10" min="0" max="99999" class="form-control" id="price" name="price" required>
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

    <div class="text-center">
        <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Crear</button>
    </div>
</form>