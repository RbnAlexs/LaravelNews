<html>
<head>
	<title></title>
</head>
	<body>
		<header>
			<nav>
				<a href="/"></a>
				<a href="<?php echo route('saludos')?>">SALUD 2 PA TODOS</a>
			</nav>
		</header>
		@yield('contenido')
		<footer>Copyright {{date('Y')}}</footer>
	</body>
</html>