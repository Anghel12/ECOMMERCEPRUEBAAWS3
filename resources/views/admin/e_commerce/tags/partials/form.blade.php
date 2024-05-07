<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de el tags']) !!}

    @error('name')
    <span class="text-danger"> {{$message}} </span>
@enderror  
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'ingrese el nombre de EL SLUG', 'readonly']) !!}

    @error('slug')
        <span class="text-danger"> {{$message}} </span>
    @enderror     
</div>
<div class="form-group">
    {!! Form::label('label', 'COLOR') !!}

    {!! Form::select('color', $colors, null, ['class' => 'form-control']) !!}
</div>