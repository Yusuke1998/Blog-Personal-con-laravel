@extends('templates.layout2')
@section('content')
@include('templates.status')
	<div class="col-md-12">
		<a class="pull-right btn btn-info" href="{{route('admin.users.create')}}" title="Añadir nuevo usuario">Añadir</a>
		<p class="h3 text-center">
			Lista de usuarios
		</p>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Correo Electronico</th>
					<th>Tipo de Usuario</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($usuarios as $usuario)
				<tr>
					<td>{{$usuario->id}}</td>
					<td>{{$usuario->name}}</td>
					<td>{{$usuario->email}}</td>
					<td><span class="{{($usuario->type=='admin')?'btn btn-success':'btn btn-info'}}">{{($usuario->type=='admin')?'Administrador':'Miembro'}}</span></td>
					<td>
						<a class="btn btn-warning" href="{{route('admin.users.edit',$usuario->id)}}" title="Editar">Editar</a>
						<form action="{{route('admin.users.destroy',$usuario->id)}}" method="POST">
							{!!csrf_field()!!}
							<input type="hidden" value="DELETE" name="_method">
							<button class="btn btn-danger">Eliminar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			{!! $usuarios->render() !!}
		</div>
	</div>
@endsection