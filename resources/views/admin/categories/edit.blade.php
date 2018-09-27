@extends('templates.layout2')
@section('content')
@include('templates.status')
<a class="pull-right btn btn-info" href="{{route('admin.categories.index')}}" title="Añadir nuevo category">Listar</a>
<div class="form-group col-md-6">
	{!! Form::open(['url' => route('admin.categories.update',$category->id), 'method'=>'put']) !!}
		<p class="h3 text-center">Editar categoria</p>

		{!! Form::text('name',$category->name, ['placeholder' => 'Nombre de la categoria', 'class' => 'form-control']) !!}
		
		{!! Form::submit('Enviar',['class' => 'btn btn-info form-control']) !!}

	{!! Form::close() !!}
</div>
@endsection