<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Blog Personal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('css/admin.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/chosen_v1.8.7_2/chosen.css')}}" rel="stylesheet">
        <link href="{{asset('plugins/Trumbowyg-master/dist/ui/trumbowyg.css')}}" rel="stylesheet">

    </head>
    <body>
    	<!-- Header -->
		<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
		  <div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="icon-toggle"></span>
			  </button>
			  <a class="navbar-brand" href="{{route('admin.')}}">Blog Personal</a>
			</div>
			<ul class="nav navbar-nav navbar-left">
		@if(Auth::user()->type=='admin')
				<li class="dropdown"><a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">Usuarios<span class="caret"></span></a>
					<ul id="g-account-menu" class="dropdown-menu" role="menu">
					<li><a href="{{route('admin.users.index')}}">Listar</a></li>
					<li><a href="{{route('admin.users.create')}}">Agregar</a></li>
				  </ul>
				</li>
		@endif
		@if(Auth::user())
				<li class="dropdown"><a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">Articulos<span class="caret"></span></a>
					<ul id="g-account-menu" class="dropdown-menu" role="menu">
					<li><a href="{{route('admin.articles.index')}}">Listar</a></li>
					<li><a href="{{route('admin.articles.create')}}">Agregar</a></li>
				  </ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">Categorias<span class="caret"></span></a>
					<ul id="g-account-menu" class="dropdown-menu" role="menu">
					<li><a href="{{route('admin.categories.index')}}">Listar</a></li>
					<li><a href="{{route('admin.categories.create')}}">Agregar</a></li>
				  </ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">Imagenes<span class="caret"></span></a>
					<ul id="g-account-menu" class="dropdown-menu" role="menu">
					<li><a href="{{route('admin.images.index')}}">Listar</a></li>
				  </ul>
				</li>
				<li class="dropdown"><a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">Tags<span class="caret"></span></a>
					<ul id="g-account-menu" class="dropdown-menu" role="menu">
					<li><a href="{{route('admin.tags.index')}}">Listar</a></li>
					<li><a href="{{route('admin.tags.create')}}">Agregar</a></li>
				  </ul>
				</li>
			</ul>
			<div class="navbar-collapse collapse">
			  <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				  <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i>&nbsp{{auth::user()->name}}<span class="caret"></span></a>
				  <ul id="g-account-menu" class="dropdown-menu" role="menu">
					<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">&nbsp<i class="glyphicon glyphicon-user"></i>&nbsp Cerrar sesion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
					</li>
				  </ul>
		@endif
				</li>
			  </ul>
			</div>
		  </div><!-- /container -->
		</div>
		<!-- /Header -->

		<!-- Main -->
		<div class="container">
			<div class="row">  	
				@yield('content')	
			</div>			  
		</div>

		<footer class="text-center">Hecho con el tutorial de codigo facilito - 2018</footer>

        
		<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/chosen_v1.8.7_2/chosen.jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('plugins/Trumbowyg-master/dist/trumbowyg.js')}}"></script>


        <script type="text/javascript">
        $(document).ready(function() {
            $(".alert").addClass("in").fadeOut(4500);
			$('[data-toggle=collapse]').click(function(){
				$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
			});
        });
        </script>

        @yield('js')
	</body>
</html>