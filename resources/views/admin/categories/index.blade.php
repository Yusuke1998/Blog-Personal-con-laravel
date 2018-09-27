@extends('templates.layout2')
@section('content')
@include('templates.status')
	<div class="col-md-12">
		<a class="pull-right btn btn-info" href="{{route('admin.categories.create')}}" title="Añadir nueva categoria">Añadir</a>
		<p class="h3 text-center">
			Lista de categorias
		</p>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->name}}</td>
					<td>
						<a class="btn btn-warning" href="{{route('admin.categories.edit',$category->id)}}" title="Editar">Editar</a>
						<form action="{{route('admin.categories.destroy',$category->id)}}" method="POST">
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
			{!! $categories->render() !!}
		</div>
	</div>
@endsection