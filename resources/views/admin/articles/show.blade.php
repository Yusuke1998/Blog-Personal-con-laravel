@extends('templates.layout2')
@section('content')
@include('templates.status')

<div class="row">
	<div class="jumbotron">
		<p class="h4 text-center">Ultimos articulos publicados</p>
	</div>
	<div class="col-md-9 pull-left">	
		<ul class="list-group">
			<li class="text-center list-group-item"><b>{{$article->title}}</b></li>
			@foreach($article->images as $image)
				<li class="list-group-item">
					<center><img width="60%" src="/img/articles/{{$image->name}}" alt=""></center>
				</li>
			@endforeach
			<li class="list-group-item">{{$article->content}}</li>
		</ul>
		<span class="label label-default">Categoria:</span>
		<span class="label label-success">{{$article->category->name}}</span>
		<span class="label label-default">Tags:</span>
		@foreach($article->tags as $tg)
			<span class="label label-primary"> {{$tg->name}}</span>
		@endforeach
	</div>
	@include('templates.aside')
</div>
@endsection