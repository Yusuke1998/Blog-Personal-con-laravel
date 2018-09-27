@extends('templates.layout2')
@section('content')
@include('templates.status')
	<div class="col-md-12">
		<a class="pull-right btn btn-info" href="{{route('admin.articles.create')}}" title="Añadir nuevo articulo">Añadir nuevo Articulo</a>
		<p class="h3 text-center">
			Lista de articulos
		</p>
		{!!Form::open(['method'=>'GET','url'=>'admin/articles'])!!}
			<div class="input-group col-md-3 pull-right">
				{{Form::text('search',null,['class'=>'pull-right form-control', 'placeholder'=>'Buscar por titulo'])}}
		            <span class="input-group-btn">
					{{Form::submit('Enviar',['class'=>'btn btn-info btn-flat'])}}
		        </span>
		    </div>
		{!!Form::close()!!}
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Titulo</th>
					<th>Categoria</th>
					<th>Autor</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($article as $arti)
				<tr>
					<td>{{$arti->id}}</td>
					<td>{{$arti->title}}</td>
					<td>{{$arti->category->name}}</td>
					<td>{{$arti->user->name}}</td>

					<td>
						<a class="btn btn-warning" href="{{route('admin.articles.edit',$arti->id)}}" title="Editar">Editar</a>
						<form action="{{route('admin.articles.destroy',$arti->id)}}" method="POST">
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
			{!! $article->render() !!}
		</div>
	</div>
@endsection