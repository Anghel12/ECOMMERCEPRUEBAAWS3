<h5> Listado de Roles</h5>
{!! Form::model($role, ['route' => ['admin.roles.update', $role ], 'autocomplete' => 'off', 'method' => 'PUT' ]) !!}

@include('admin.roles.partials.form')

{!! Form::submit('Crear rol', ['class' => 'btn btn-primary' ]) !!}

{!! Form::close() !!}