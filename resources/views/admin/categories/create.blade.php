@extends('templates.layout2')
@section('content')
@include('templates.status')
<a class="pull-right btn btn-info" href="{{route('admin.categories.index')}}" title="Añadir nueva categoria">Listar</a>
<div class="form-group col-md-6">
	{!! Form::open(['url' => route('admin.categories.store'), 'method'=>'post']) !!}
		<p class="h3 text-center">Registrar categoria</p>

		{!! Form::text('name',null, ['placeholder' => 'Nombre de categoria', 'class' => 'form-control']) !!}
		
		{!! Form::submit('Enviar',['class' => 'btn btn-info form-control']) !!}

	{!! Form::close() !!}
</div>
@endsection