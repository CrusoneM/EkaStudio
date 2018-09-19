@extends('layouts.app')
@section('title', '| Paso_1')
@section('content')

		<div id="steps">
			<div class="step one active">1</div>
			<div class="step-divider one"></div>
			<div class="step two">2</div>
			<div class="step-divider two"></div>
			<div class="step three">3</div>
			<p>PASO 1 DE 3</p>
		</div>

		<section id="form-paso-one">
			<form action="" method="post">

				<div class="paso-input">
					<h5>¿CUÁL ES TU NOMBRE COMPLETO?</h5>
					<p>DE PREFERENCIA COMPLETO :)</p>
					<input type="text" name="name">
				</div>
				<div class="row">
					<div class="paso-input col m6">
						<h5>TELÉFONO</h5>
						<p>SI, PUEDE QUE TE MANDEMOS WHATSAPP</p>
						<input type="text" name="phone">
					</div>
					<div class="paso-input col m6">
						<h5>MAIL</h5>
						<p>PARA ENVIARTE LA INFORMACIÓN</p>
						<input type="text" name="email">
					</div>
				</div>
				<div id="paraquien">
					<h5>¿PARA QUIÉN ES EL PROYECTO?</h5>
					<div class="row">
						<div class="col m4">
							<img src="/images/pasos/personas-1.svg" alt="personas">
							<p>PERSONAL</p>
							<div class="checkbox">
								<p>
							      <label>
							        <input type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							</div>
						</div>
						<div class="col m4">
							<img src="/images/pasos/personas-2.svg" alt="personas">
							<p>STARTUP</p>
							<div class="checkbox">
								<p>
							      <label>
							        <input type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							</div>
						</div>
						<div class="col m4">
							<img src="/images/pasos/personas-3.svg" alt="personas">
							<p>EMPRESA</p>
							<div class="checkbox">
								<p>
							      <label>
							        <input type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							</div>
						</div>
					</div>
				</div>
				<div class="paso-input">
					<h5>¿CUÁL ES EL NOMBRE DE TU EMPRESA?</h5>
					<p>EL DE TU EMPRESA</p>
					<input type="text" name="empresa_name">
				</div>
				<div class="paso-input">
					<h5>¿CUÁL ES EL NOMBRE DE TU PROYECTO?</h5>
					<p>EN CASO QUE NO SEA IGUAL AL DE TU EMPRESA. Y SI ES EL MISMO... PUES ESCRÍBELO DE NUEVO</p>
					<input type="text" name="proyect_name">
				</div>
				<div class="paso-input">
					<h5>¿TU PROYECTO ESTÁ ACTUALMENTE EN MARCHA?</h5>
					<div class="row">
						<div class="col m6">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>YA TIENE TIEMPO FUNCIONANDO</p>
							</div>
							<div class="paso-inputs-checkboxes">
							    <p>¿CÚANTO TIEMPO?</p>
								<input type="text" name="">
							</div>
						</div>
						<div class="col m6">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>NO, PERO PRONTO LO LANZAREMOS</p>
							</div>
							<div class="paso-inputs-checkboxes">
							    <p>¿CÚANDO?</p>
								<input type="text" name="">
							</div>
						</div>
					</div>
				</div>
				<div class="paso-input more-margin">
					<h5>¿CUÁL ES LA PRINCIPAL FUENTE DE INGRESO?</h5>
					<div class="row">
						<div class="col m6">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>VENTA ONLINE</p>
							</div>
						</div>
						<div class="col m6">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>VENTA DE MOSTRADOR</p>
							</div>
						</div>
					</div>
				</div>
				<div class="paso-input more-margin">
					<h5>¿QUE TAN URGENTE ES TU PROYECTO?</h5>
					<div class="row">
						<div class="col m4">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>2 SEMANAS</p>
							</div>
						</div>
						<div class="col m4">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>3 SEMANAS</p>
							</div>
						</div>
						<div class="col m4">
							<div class="paso-inputs-checkboxes">
								<p>
							      <label>
							        <input type="checkbox" class="filled-in" />
							        <span></span>
							      </label>
							    </p>
							    <p>4 SEMANAS O MÁS</p>
							</div>
						</div>
					</div>
				</div>
				<div id="btns">
					<div class="row">
						<div class="col m6">
							{{-- <button class="btn-custom-btn">REGRESAR</button> --}}
							<a href="{{ url('/') }}" class="btn-custom">REGRESAR</a>
						</div>
						<div class="col m6">
							{{-- <button class="btn-custom-btn">CONTINUAR</button> --}}
							<a href="{{ url('/paso-2') }}" class="btn-custom">CONTINUAR</a>
						</div>
					</div>
				</div>

			</form>
		</section>

@endsection
@section('footer-class', 'servicio steps')