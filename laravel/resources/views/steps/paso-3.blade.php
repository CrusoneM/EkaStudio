@extends('layouts.app')
@section('title', '| Paso_3')
@section('content')

		<div id="steps">
			<div class="step one">1</div>
			<div class="step-divider one"></div>
			<div class="step two">2</div>
			<div class="step-divider two"></div>
			<div class="step three active">3</div>
			<p>PASO 3 DE 3</p>
		</div>

		<section id="form-paso-three">
			<form action="" method="post">

				<div class="paso-title">
					<h5>TU PLAN PERFECTO LUCE ASI:</h5>
				</div>
				<div id="plan-final" class="z-depth-4">
					<div class="plan-final-plan">
						<div class="plan-final-plan-img"><img src="/images/pasos/articulo-1.svg" alt="arma-tu-plan-icon"></div>
						<div class="plan-final-plan-info">
							<p>LOGOTIPO</p>
							<div class="cantidad">
								<p>CANTIDAD</p>
								<div class="numero">
									<p class="">1</p>
									<a href="#1" class="flecha-up"><i class="material-icons">arrow_drop_up</i></a>
									<a href="#2" class="flecha-down"><i class="material-icons">arrow_drop_down</i></a>
								</div>
								<a href="#">ELIMINAR</a>
							</div>
							<h5>$ 9,750</h5>
						</div>
					</div>
					<div class="plan-final-plan">
						<div class="plan-final-plan-img"><img src="/images/pasos/articulo-3.png" alt="arma-tu-plan-icon"></div>
						<div class="plan-final-plan-info">
							<p>PAPELERÍA</p>
							<div class="cantidad">
								<p>CANTIDAD</p>
								<div class="numero">
									<p class="">1</p>
									<a href="#1" class="flecha-up"><i class="material-icons">arrow_drop_up</i></a>
									<a href="#2" class="flecha-down"><i class="material-icons">arrow_drop_down</i></a>
								</div>
								<a href="#">ELIMINAR</a>
							</div>
							<h5>$ 3,200</h5>
						</div>
					</div>
					<div class="plan-final-plan">
						<div class="plan-final-plan-img"><img src="/images/pasos/articulo-2.png" alt="arma-tu-plan-icon"></div>
						<div class="plan-final-plan-info">
							<p>DISEÑO TARJETAS</p>
							<div class="cantidad">
								<p>CANTIDAD</p>
								<div class="numero">
									<p class="">1</p>
									<a href="#1" class="flecha-up"><i class="material-icons">arrow_drop_up</i></a>
									<a href="#2" class="flecha-down"><i class="material-icons">arrow_drop_down</i></a>
								</div>
								<a href="#">ELIMINAR</a>
							</div>
							<h5>$ 3,500</h5>
						</div>
					</div>
					<div class="plan-final-plan">
						<div class="plan-final-plan-img"><img src="/images/pasos/articulo-4.png" alt="arma-tu-plan-icon"></div>
						<div class="plan-final-plan-info">
							<p>APLICACIONES</p>
							<div class="cantidad">
								<p>CANTIDAD</p>
								<div class="numero">
									<p class="">1</p>
									<a href="#1" class="flecha-up"><i class="material-icons">arrow_drop_up</i></a>
									<a href="#2" class="flecha-down"><i class="material-icons">arrow_drop_down</i></a>
								</div>
								<a href="#">ELIMINAR</a>
							</div>
							<h5>$ 2,800</h5>
						</div>
					</div>
					<div class="plan-final-plan">
						<div class="plan-final-plan-img"><img src="/images/pasos/articulo-5.png" alt="arma-tu-plan-icon"></div>
						<div class="plan-final-plan-info">
							<p>WEB</p>
							<div class="cantidad">
								<p>CANTIDAD</p>
								<div class="numero">
									<p class="">1</p>
									<a href="#1" class="flecha-up"><i class="material-icons">arrow_drop_up</i></a>
									<a href="#2" class="flecha-down"><i class="material-icons">arrow_drop_down</i></a>
								</div>
								<a href="#">ELIMINAR</a>
							</div>
							<h5>$ 20,000</h5>
						</div>
					</div>
				</div>
				<div id="subtotal" class="z-depth-4">
					<div class="row">
						<div class="col s7 m6"><h5>SUBTOTAL POR 5 ITEMS</h5></div>
						<div class="col s5 m6"><p>$ 15,000</p></div>
					</div>
				</div>
				<div id="descuento" class="z-depth-4">
					<div class="row">
						<div class="col s7 m7"><h5>-10% DE DESCUENTO</h5></div>
						<div class="col s5 m5"><p>- $ 1,500</p></div>
					</div>
				</div>
				<div id="total" class="z-depth-4">
					<div id="lanzamiento">
						<div class="row">
							<div class="col s8 m7"><h5>DESCUENTO POR LANZAMIENTO</h5></div>
							<div class="col s4 m5"><p>- $ 850</p></div>
						</div>
					</div>
					<div id="total-total">
						<div class="row">
							<div class="col s6 m6">
								<h5>TOTAL</h5>
							</div>
							<div class="col s6 m6 ">
								<p><span>$ 12,650</span></p>
								<p class="ahorro"><span>AHORRO: $ 2,350</span></p>
							</div>
						</div>
					</div>
				</div>
				<div id="btns">
					<div class="row">
						<div class="col s6 m6">
							{{-- <button class="btn-custom-btn">REGRESAR</button> --}}
							<a href="{{ url('/paso-2') }}" class="btn-custom">REGRESAR</a>
						</div>
						<div class="col s6 m6">
							{{-- <button class="btn-custom-btn">CONTINUAR</button> --}}
							<a href="{{ url('/') }}" class="btn-custom">CONTINUAR</a>
						</div>
					</div>
				</div>

			</form>
		</section>

@endsection
@section('footer-class', 'servicio steps')