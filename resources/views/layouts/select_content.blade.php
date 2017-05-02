<option value="0" selected>Todas</option>
@foreach($elements as $element)
    <option value="{{$element->id}}">{{$element->name}}</option>
@endforeach