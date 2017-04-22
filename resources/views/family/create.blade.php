
<form action="/familias/crear" method="POST">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="orden">Orden
            <select class="form-control" id="order" name="order">
                <option value="0">Selecciona</option>
                @foreach($orders as $order)
                    <option value="{{$order->id}}">{{$order->name}}</option>
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