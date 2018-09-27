@extends('templates.layout2')
@section('content')
	@foreach($images as $image)
<div class="col-md-3 pull-left">
	<div class="card">
		<div class="card-body">
			<h4 class="card-title text-center">{{$image->article->title}}</h4>
			<img width="200px" height="200px" class="card-img-top" src="/img/articles/{{$image->name}}" alt="{{$image->name}}">
		</div>
	</div>
</div>
	@endforeach
@endsection