<div class="col-md-3 pull-right">
	<div class="panel panel-primary">
		<h4 class="text-center">Categorias</h4>
	@foreach($categories as $category)
		<ul class="list-group">
			<li class="list-group-item">
				<a href="{{route('category.name',$category->name)}}" title="{{$category->name}}"><span>{{$category->name}}</span></a>
				<span class="badge">{{$category->articles->count()}}</span>
			</li>
		</ul>		
	@endforeach
	</div>
	<div class="text-center  panel panel-info">
		<h4 class="text-center">Tags</h4>
		@foreach($tags as $tag)
		<a href="{{route('tag.name',$tag->name)}}" title="{{$tag->name}}"><span class="label label-default">{{$tag->name}}</span></a>
		@endforeach	
	</div>	
</div>