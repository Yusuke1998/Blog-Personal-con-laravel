@extends('templates.layout2')
@section('content')
@include('templates.status')
<a class="pull-right btn btn-info" href="{{route('admin.users.index')}}" title="Añadir nuevo usuario">Listar</a>
<div class="form-group col-md-6">
	{!! Form::open(['url' => route('admin.users.update',$usuario->id), 'method'=>'put']) !!}
		<p class="h3 text-center">Editar usuario</p>

		{!! Form::text('name',$usuario->name, ['placeholder' => 'Nombre y Apellido', 'class' => 'form-control']) !!}

		{!! Form::email('email',$usuario->email, ['placeholder' => 'Correo Electronico ', 'class' => 'form-control']) !!}

		{!! Form::password('password',['placeholder' => 'Contraseña','class'=>'form-control']) !!}

		{!! Form::select('type', [''=>'Seleccione...','member' => 'Miembro', 'admin' => 'Administrador'],null,['class' => 'form-control']) !!}
		
		{!! Form::submit('Enviar',['class' => 'btn btn-info form-control']) !!}

	{!! Form::close() !!}
</div>
@endsection