<html>
<head>
	<title>Titulo principal</title>
</head>
	<body>
		<header>
			<style>
				nav .active{
					color: green;
					text-decoration: none
				}
			</style>
			<nav>
				<?php function activeMenu($url) {
						return request() -> is ($url) ? 'active' : '';
					}
				?>
				<a class="{{ activeMenu('/')}}" href="{{ route('home') }}">INICIO</a>
				<a class="{{ activeMenu('vista')}}" href="{{ route ('vista')}}">VISTA</a>
				<a class="{{ activeMenu('saludos')}}" href="{{ route ('saludos')}}">SALUDOS</a>
				<a class="{{activeMenu('contactos')}}" href="{{route('contactos')}}">CONTACTO</a>
			</nav>
		</header>
		<h1>{{ request() -> is('vista') ? 'Estas en el inicio':'No estas en el inicio'}}</h1>
		@yield('contenido')
		<footer>Copyright {{date('Y')}} Esto es el pie de página</footer>
	</body>
</html>