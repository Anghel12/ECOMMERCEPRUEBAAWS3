<h5> Listado de Roles</h5>
{!! Form::open(['route' => 'admin.roles.store'] ) !!}

@include('admin.roles.partials.form')

{!! Form::submit('Crear rol', ['class' => 'btn btn-primary' ]) !!}

{!! Form::close() !!}