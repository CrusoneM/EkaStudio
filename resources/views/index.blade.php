@extends('layouts.app')
@section('title', '')
@section('content')

		<section id="homecabecera">
			<div class="row">
				<div class="col-12" >
					<h1>THE BEER STORE</h1>
					<h4>DESARROLLO DE IMAGEN</h4>
					<h4>-</h4>
				</div>
				<div class="col-12" >
					<h5>
						Nos destacamos por logotipos elegantes, frescos y sin necesidad de <br>
						saturar con adornos confusos visualmente. En este caso, tratándose <br>
						de un local de comidas y bebidas, se logró crear un diseño muy<br>
						limpio y fácil de calar en la mente del público meta. Se usó una <br>
						tipografía ligera y con mucha presencia.
					</h5>				
				</div>
				
			</div>
			<div class="hr-divider"></div>
			
		</section>

		<section>
				<div class="row col-12">
					<div class="col s4 offset-s4">
					 	<img   src="{{ URL::asset('images/index/beer-landing-footer.svg') }}"  alt="">
					 </div>
				</div>
		</section>

		<section id="imagenes">
			<div class="col s12 m12">
				<img width="100%" src="images/index/beer-landing-content.png" alt="opcion">
			</div>
			<br><br><br>
			<div class="col s12 m12 ">
				<img class="p-" width="100%" src="images/index/beer-content-bar-tender.png" alt="opcion">
			</div>
			<br><br><br>
			<div class="col s12 m12 ">
				<img class="p-" width="100%" src="images/index/beer-landing.png" alt="opcion">
			</div>
		</section>

		<br><br>
		<div class="col s12 m12 center">
				<a class="waves-effect waves-light red btn">IR A OTROS PROYECTOS</a>
			</div>

		

@endsection
@section('footer-class', 'index')