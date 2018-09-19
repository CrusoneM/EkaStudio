@extends('layouts.app')
@section('title', '| Paso_2')
@section('content')

		<div id="steps">
			<div class="step one">1</div>
			<div class="step-divider one"></div>
			<div class="step two active">2</div>
			<div class="step-divider two"></div>
			<div class="step three">3</div>
			<p>PASO 2 DE 3</p>
		</div>

		<section id="form-paso-two">
			<form action="" method="post">

				<div class="paso-title">
					<h5>DINOS TUS NECESIDADES</h5>
					<p>RECUERDA QUE MIENTRAS MÁS ITEMS ELIGAS. MÁS DESCUENTO VAS A OBTENER</p>
				</div>
				<div id="paso-two-articles">
					<div class="row">
						<div class="col m3">
							<div class="paso-two-article z-depth-3">
								<img src="/images/pasos/articulo-1.svg" alt="foto">
								<h5>LOGOTIPO</h5>
								<a href="#modal-logotipo" class="modal-trigger">conocer más</a>
								<p>$ 9,750</p>
								<div class="cantidad">
									<a href="#" class="signo menos">-</a>
									<p>0</p>
									<a href="#" class="signo mas">+</a>
								</div>
							</div>
						</div>
						<div class="col m3">
							<div class="paso-two-article z-depth-3">
								<img src="/images/pasos/articulo-2.png" alt="foto">
								<h5>DISEÑO TARJETAS</h5>
								<a href="#modal-logotipo" class="modal-trigger">conocer más</a>
								<p>$ 3,500</p>
								<div class="cantidad">
									<a href="#" class="signo menos">-</a>
									<p>0</p>
									<a href="#" class="signo mas">+</a>
								</div>
							</div>
						</div>
						<div class="col m3">
							<div class="paso-two-article z-depth-3">
								<img src="/images/pasos/articulo-3.png" alt="foto">
								<h5>PAPELERÍA</h5>
								<a href="#modal-logotipo" class="modal-trigger">conocer más</a>
								<p>$ 3,200 c/u</p>
								<div class="cantidad">
									<a href="#" class="signo menos">-</a>
									<p>0</p>
									<a href="#" class="signo mas">+</a>
								</div>
							</div>
						</div>
						<div class="col m3">
							<div class="paso-two-article z-depth-3">
								<img src="/images/pasos/articulo-4.png" alt="foto">
								<h5>ACCESORIOS</h5>
								<a href="#modal-logotipo" class="modal-trigger">conocer más</a>
								<p>$ 2,800</p>
								<div class="cantidad">
									<a href="#" class="signo menos">-</a>
									<p>0</p>
									<a href="#" class="signo mas">+</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col m3">
							<div class="paso-two-article z-depth-3">
								<img src="/images/pasos/articulo-5.png" alt="foto">
								<h5>WEB</h5>
								<a href="#modal-logotipo" class="modal-trigger">conocer más</a>
								<p>$ 20,000</p>
								<div class="cantidad">
									<a href="#" class="signo menos">-</a>
									<p>0</p>
									<a href="#" class="signo mas">+</a>
								</div>
							</div>
						</div>
						<div class="col m3">
							<div class="paso-two-article z-depth-3">
								<img src="/images/pasos/articulo-6.png" alt="foto">
								<h5>NOMBRE</h5>
								<a href="#modal-logotipo" class="modal-trigger">conocer más</a>
								<p>$ 3,000</p>
								<div class="cantidad">
									<a href="#" class="signo menos">-</a>
									<p>0</p>
									<a href="#" class="signo mas">+</a>
								</div>
							</div>
						</div>
						<div class="col m3">
							<div class="paso-two-article z-depth-3">
								<img src="/images/pasos/articulo-7.png" alt="foto">
								<h5>DISEÑO T-SHIRT</h5>
								<a href="#modal-logotipo" class="modal-trigger">conocer más</a>
								<p>$ 3,400 c/u</p>
								<div class="cantidad">
									<a href="#" class="signo menos">-</a>
									<p>0</p>
									<a href="#" class="signo mas">+</a>
								</div>
							</div>
						</div>
						<div class="col m3">
							<div class="paso-two-article z-depth-3">
								<img src="/images/pasos/articulo-8.png" alt="foto">
								<h5>MENÚ</h5>
								<a href="#modal-logotipo" class="modal-trigger">conocer más</a>
								<p>$ 5,000</p>
								<div class="cantidad">
									<a href="#" class="signo menos">-</a>
									<p>0</p>
									<a href="#" class="signo mas">+</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="btns">
					<div class="row">
						<div class="col m6">
							{{-- <button class="btn-custom-btn">REGRESAR</button> --}}
							<a href="{{ url('/paso-1') }}" class="btn-custom">REGRESAR</a>
						</div>
						<div class="col m6">
							{{-- <button class="btn-custom-btn">CONTINUAR</button> --}}
							<a href="{{ url('/paso-3') }}" class="btn-custom">CONTINUAR</a>
						</div>
					</div>
				</div>

			</form>

			<div id="modal-logotipo" class="modal paso_2">
			    <div class="modal-content">
			      <h5>LOGOTIPO</h5>
			      <p>Recibirás nuestra asesoría para saber que tipo de logotipo se adapta mejor a tus necesidades.</p>
			      <p>Tendrás 2 sesiones para correcciones.</p>
			      <p>Presentación de primeras ideas.</p>
			      <p>Presentación de logotipo final.</p>
			      <p>Entregables en digital<br>[.ai .pdf .jpg .eps .png]</p>
			    </div>
			    <div class="modal-footer">
			      <img src="/images/pasos/logo-negro.svg" alt="logo">
			    </div>
			</div>

		</section>

@endsection
@section('footer-class', 'servicio steps')