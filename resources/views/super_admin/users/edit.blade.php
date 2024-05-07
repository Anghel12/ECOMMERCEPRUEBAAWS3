<div class="card">
    <div class="card-body">
        <p class="h5"> Nombre:</p>
        <p class="form-control"> {{$user->name}} </p>

        <h5> Listado de Roles</h5>
        {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put' ]) !!}

        @foreach ($roles as $role)

        <div>
            <label for="">
                {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                {{$role->name}}
            </label>
        </div>
            
        @endforeach

        {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2' ]) !!}

        {!! Form::close() !!}
    </div>
   </div>