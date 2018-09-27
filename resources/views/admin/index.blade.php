@extends('templates.layout2')
@section('content')
@include('templates.status')

<div class="row">
	<div class="jumbotron">
		<p class="h4 text-center">Ultimos articulos publicados</p>
	</div>
	<div class="col-md-9 pull-left">	
	@foreach($articles as $article)
		<div class="col-md-4 pull-left">	
			<div class="panel panel-info">
				<div class="panel-heading">
					<a href="{{route('view.article',$article->id)}}" title="">
						<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					&nbsp{{$article->title}}
					</a>
				</div>
				<div class="panel-body">
					<span class="pull-right"><span class="glyphicon glyphicon-time"></span> {{$article->created_at->diffForHumans()}}</span>
				@foreach($article->images as $image)
					<center>
					<a href="{{route('view.article',$article->id)}}" title="">
						<img height="120" width="120" src="{{asset('img/articles').'/'.$image->name}}" alt="imagen del articulo">
					</a>
					</center>
				@endforeach
				</div>
				<div class="panel-footer">
					<a href="{{route('category.name',$article->category->name)}}" title=""><span class="glyphicon glyphicon-list-alt"></span> {{$article->category->name}}</a>
				</div>
				
			</div>
		</div>
	@endforeach
	</div>
	@include('templates.aside')
	<div class="col-md-12 text-center">
		{!!$articles->render()!!}
	</div>
</div>
@endsection