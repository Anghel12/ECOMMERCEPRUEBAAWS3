<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Ingrese el nombre del rol']) !!}
</div>
<h3>Lista de permisos</h3>

@foreach ($permissions as $permission)
    <div>
        <label for="">
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{$permission->description}}
        </label>
    </div>
@endforeach