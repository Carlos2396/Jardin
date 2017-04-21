
<form action="/generos/crear" method="POST">

    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="form-group">
        <label for="name">Descripción</label>
        <textarea class="form-control" id="description" name="description" required>
        </textarea>
    </div>

    <div class="form-group">
        <label for="water_care">Cuidados con respecto al agua</label>
        <textarea class="form-control" id="water_care" name="water_care" required>
        </textarea>
    </div>

    <div class="form-group">
        <label for="light_care">Cuidados con respecto a la luz</label>
        <textarea <textarea class="form-control" id="light_care" name="light_care" required>
        </textarea>
    </div>

    <div class="form-group">
        <label for="temp_care">Cuidados con respecto a la temperatura</label>
        <textarea <textarea class="form-control" id="temp_care" name="temp_care" required>
        </textarea>
    </div>
    <div class="form-group">
        <label for="family">Familia
            <select class="form-control" id="family" name="family">
                @foreach($families as $family)
                    <option value="{{$family->id}}">{{$family->name}}</option>
                @endforeach
            </select>
        </label>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-template-main"><i class="fa fa-user-md"></i>Crear</button>
    </div>
</form>