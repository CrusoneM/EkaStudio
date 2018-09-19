<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="description" content=" ">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->

    <title>EKA Studios @yield('title')</title>

    <!-- Open Sans Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
 	<!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Custom css  -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
	<header>
		<nav class="nav-extended align-center">
			<a href="/"><img src="/images/logo.svg" id="nav-logo" alt="Logo"></a>
			<div id="nav-info">
				<h2>BIENVENIDOS A EKA STUDIO</h2>
				<h3>CUERNAVACA | CIUDAD DE MÉXICO | CARACAS</h3>
				<p>ENVÍANOS TUS PREGUNTAS A HELLO@EKASTUDIO.NET</p>
				<p id="nav-date">13//26</p>
			</div>
			<div id="nav-links">
				<ul>
				    <li><a href="#">ACERCA DE EKA</a></li>
				    <li><a href="#">SERVICIOS</a></li>
				    <li><a href="#">PROYECTOS</a></li>
				    <li><a href="#">CONTACTO</a></li>
				</ul>
			</div>
		</nav>

		<ul class="sidenav" id="mobile-demo">
			<li><a href="#">ACERCA DE EKA</a></li>
		    <li><a href="#">SERVICIOS</a></li>
		    <li><a href="#">PROYECTOS</a></li>
		    <li><a href="#">CONTACTO</a></li>
		</ul>
	</header>

	<div id="main">
		@yield('content')
	</div>

	<footer class="@yield('footer-class')">
		<div id="social-media">
			<img src="/images/corona.svg" alt="corona">
			<div class="row">
				<div class="col m4"><a href="#">FACEBOOK</a></div>
				<div class="col m4"><a href="#">INSTAGRAM</a></div>
				<div class="col m4"><a href="#">LINKEDIN</a></div>
			</div>
			<h6>SÍGUENOS EN NUESTRAS REDES SOCIALES</h6>
		</div>
		<div id="info">
			<h5>CUERNAVACA | CIUDAD DE MÉXICO | CARACAS</h5>
			<p>ENVÍANOS TUS PREGUNTAS A HELLO@EKASTUDIO.NET</p>
			<h4>SERVICIOS</h4>
			<h3>Somos un equipo de profesionales que trabaja para crear y posicionar tu marca.</h3>
		</div>
		<div id="links">
			<div class="row">
				<div class="col m3">
					<ul class="link-list">
					    <li class="link-title"><a href="#">Copywriting</a></li>
					    <li><a href="#">Nombre</a></li>
					    <li><a href="#">Eslogan</a></li>
					    <li><a href="#">Redacción</a></li>
					</ul>
				</div>
				<div class="col m3">
					<ul class="link-list">
					    <li class="link-title"><a href="#">Diseño Gráfico</a></li>
					    <li><a href="{{ url('/servicio/diseño/logotipo') }}">Logotipo</a></li>
					    <li><a href="#">Aplicaciones de Marca</a></li>
					    <li><a href="#">Señalización</a></li>
					    <li><a href="#">Manual de Marca</a></li>
					</ul>
				</div>
				<div class="col m3">
					<ul class="link-list">
					    <li class="link-title"><a href="#">Ilustración</a></li>
					    <li><a href="#">Diseño de íconos</a></li>
					    <li><a href="#">Diseño de infografías</a></li>
					</ul>
				</div>
				<div class="col m3">
					<ul class="link-list">
					    <li class="link-title"><a href="#">Diseño Web</a></li>
					    <li><a href="#">Diseño de interface</a></li>
					    <li><a href="#">Experiencia de usuario</a></li>
					    <li><a href="#">Programación</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    	$(document).ready(function(){
		    $('.parallax').parallax();
		    $('.modal').modal();
	  	});
    </script>
</body>
</html>