@extends('templates.layout2')
@section('content')
@include('templates.status')
<a class="pull-right btn btn-info" href="{{route('admin.tags.index')}}" title="Añadir nuevo tag">Listar</a>
<div class="form-group col-md-6">
	{!! Form::open(['url' => route('admin.tags.update',$tag->id), 'method'=>'put']) !!}
		<p class="h3 text-center">Editar tag</p>

		{!! Form::text('name',$tag->name, ['placeholder' => 'Nombre del tag', 'class' => 'form-control']) !!}
		
		{!! Form::submit('Enviar',['class' => 'btn btn-info form-control']) !!}

	{!! Form::close() !!}
</div>
@endsection