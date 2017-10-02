<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta>
	</head>
	<body>
		<header>
			<nav>
				<a href="/"></a>
				<a href="<?php echo route('saludos')?>">SALUD 2 PA TODOS</a>
			</nav>
		</header>
		<h1>SALUD0S VISTA PARA D MAMON {{$nombre}}</h1>
		{!!$html!!}

		<ul>
			@foreach($consolas as $consola)
			<li>{{$consola}}</li>
			@endforeach
		</ul>
	</body>
</html>