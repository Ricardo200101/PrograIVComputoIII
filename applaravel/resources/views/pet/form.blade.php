    Nombre:
    <input type="text" name="name" id="name" value="{{ isset($pet)?$pet->name:'' }}" /><br />
    Edad:
    <input type="number" name="age" id="age" value="{{ isset($pet)?$pet->age:'' }}" /><br />

    <select name="owner_id">
        <option value=""></option>
        @foreach($owner as $owne)
            <option value="{{$owne->id}}}"> 
                {{$own->full_name}}
</option>
@endforeach
</select>
    <button type="submit">Guardar</button>