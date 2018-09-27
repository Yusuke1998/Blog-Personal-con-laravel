@extends('templates.layout2')
@section('content')
@include('templates.status')
<a class="pull-right btn btn-info" href="{{route('admin.articles.index')}}" title="Lista de articulos">Listar</a>
<div class="col-md-2"></div>
<div class="form-group col-md-8">
	{!! Form::open(['url' => route('admin.articles.update',$article->id), 'method'=>'put']) !!}
		<p class="h3 text-center">Editar Articulo <small>{{$article->title}}</small></p>
		<div class="form-group">
			{!! Form::label('title', 'Titulo del articulo') !!}
			{!! Form::text('title',$article->title, ['placeholder' => 'Titulo del articulo', 'class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('category', 'Selecciona una categoria') !!}
			<select class="form-control chosen-category" name="category_id">
				@foreach($categories as $category)
				<option value="{{$category->id}}">{{$category->name}}</option>}
				@endforeach
			</select>
		</div>
		<div class="form-group">
			{!! Form::label('content', 'Contenido del articulo') !!}
			{!! Form::textarea('content',$article->content,['class'=>'form-control trumbowyg-area']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('tags', 'Selecciona los tags') !!}
			<select class="form-control chosen-tags" name="tags[]" multiple>
			@foreach($tags as $tag)
				<option value="{{$tag->id}}">{{$tag->name}}</option>
			@endforeach
			</select>
		</div>

		
		{!! Form::submit('Guardar cambios',['class' => 'btn btn-info form-control']) !!}

	{!! Form::close() !!}
</div>
<div class="col-md-2"></div>
@endsection

@section('js')
	<script>
		$('.chosen-tags').chosen({
			placeholder_text_multiple:'Selecciona los tags, maximo 5.',
			max_selected_options:5,
			no_results_text:'No hay coincidencias para mostrar.',
		});
		$('.chosen-category').chosen({
			no_results_text:'No hay coincidencias para mostrar.',
		});

		$('.trumbowyg-area').trumbowyg({

		});
	</script>
@endsection