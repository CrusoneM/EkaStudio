@extends('layouts.app')
@section('title', '| Diseño de Logotipo')
@section('content')

		<section id="jumbotron" class="servicio diseño">
			<h2>DISEÑO</h2>
			<h3>DE LOGOTIPO</h3>
			<img src="/images/servicios/diseño/header.png" alt="header">
			<h4>OBTÉN TU PRESUPUESTO<br>EN MINUTOS</h4>
			<a href="#" class="btn-custom">¡VAMOS!</a>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</section>

		<section id="parallax" class="servicio diseño">
			<div class="parallax-container">
				<div class="row">
					<div class="col m4">
						<h5>Paso 01_</h5>
						<p>Así sabremos si solo necesitas un logotipo o una estrategia específica.</p>
						<img src="/images/servicios/diseño/icono-1.svg" alt="icono">
					</div>
					<div class="col m4">
						<h5>Paso 02_</h5>
						<p>Arma un plan de acuerdo a tus requerimientos y obtén tu presupuesto en minutos.</p>
						<img src="/images/servicios/diseño/icono-2.svg" alt="icono">
					</div>
					<div class="col m4">
						<h5>Paso 03_</h5>
						<p>¡Te atenderemos el mismo día! <br><br>de 9.00 - 18.00</p>
						<img src="/images/servicios/diseño/icono-3.svg" alt="icono">
					</div>
				</div>
				<a href="#" class="btn-custom hoverable">QUIERO INICIAR</a>
		      <div class="parallax"><img src="/images/servicios/diseño/parallax.png"></div>
		    </div>
		</section>

		<section id="otras_opciones" class="servicio diseño">
			<h4>¿ALGO MÁS APARTE DE TU LOGO?</h4>
			<p>Puedes elegir el paquete que más se adapte a las necesidades de tu marca.<br>
			Mientras más grande sea tu paquete, más descuento obtendrás</p>
			<div class="row">
				<div class="col m6">
					<div class="opcion z-depth-4">
						<h5>SOLO LOGO</h5>
						<img src="/images/index/arma-tu-plan-1.svg" alt="opcion">
						<a href="#" class="btn-custom">INICIAR</a>
						<h4>-5% DE DESCUENTO</h4>
					</div>
				</div>
				<div class="col m6">
					<div class="opcion opcion-dos z-depth-4">
						<h5>LOGO + 3 APLICACIONES</h5>
						<img src="/images/index/arma-tu-plan-1.svg" alt="opcion">
						<img src="/images/index/arma-tu-plan-3.png" alt="opcion">
						<a href="#" class="btn-custom">INICIAR</a>
						<h4>-10% DE DESCUENTO</h4>
					</div>
				</div>
			</div>
			<div class="opcion opcion-tres z-depth-4">
				<h5>LOGO + APLICACIONES + WEBSITE</h5>
				<img src="/images/index/arma-tu-plan-1.svg" alt="opcion">
				<img src="/images/index/arma-tu-plan-2.png" alt="opcion">
				<img src="/images/index/arma-tu-plan-5.png" alt="opcion">
				<a href="#" class="btn-custom">INICIAR</a>
				<h4>-15% DE DESCUENTO</h4>
			</div>
			<div id="especifico">
				<a href="#" class="btn-custom">¡ARMA UN PLAN A TU MEDIDA AHORA MISMO!</a>
			</div>
		</section>

@endsection
@section('footer-class', 'servicio')