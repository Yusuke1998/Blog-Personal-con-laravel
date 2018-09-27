@extends('templates.layout2')
@section('content')
@include('templates.status')
	<div class="col-md-12">
		<a class="pull-right btn btn-info" href="{{route('admin.tags.create')}}" title="Añadir nuevo tag">Añadir nuevo tag</a>
		<p class="h3 text-center">
			Lista de tags
		</p>
		{!!Form::open(['method'=>'GET','url'=>'admin/tags'])!!}
			<div class="input-group col-md-3 pull-right">
				{{Form::text('search',null,['class'=>'pull-right form-control', 'placeholder'=>'Buscar por nombre'])}}
		            <span class="input-group-btn">
					{{Form::submit('Enviar',['class'=>'btn btn-info btn-flat'])}}
		        </span>
		    </div>
		{!!Form::close()!!}
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tags as $tag)
				<tr>
					<td>{{$tag->id}}</td>
					<td>{{$tag->name}}</td>
					<td>
						<a class="btn btn-warning" href="{{route('admin.tags.edit',$tag->id)}}" title="Editar">Editar</a>
						<form action="{{route('admin.tags.destroy',$tag->id)}}" method="POST">
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
			{!! $tags->render() !!}
		</div>
	</div>
@endsection