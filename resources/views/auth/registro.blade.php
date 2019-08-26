@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(/imagenes/1.jpg);"">
					<span class="login100-form-title-1">
						REGISTRARSE
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="escriba su nombre">
						<span class="label-input100">NOMBRE:</span>
						<input class="input100" type="text" name="nombre" placeholder="escriba su nombre">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "escriba su apellido">
						<span class="label-input100">APELLIDO:</span>
						<input class="input100" type="text" name="apell" placeholder="escriba su apellido">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "escriba su telefono">
						<span class="label-input100">TELEFONO:</span>
						<input class="input100" type="text" name="apell" placeholder="escriba su telefono">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "escriba su correo">
						<span class="label-input100">CORREO:</span>
						<input class="input100" type="email" name="apell" placeholder="escriba su correo">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate = "escriba su contraseña">
						<span class="label-input100">CONTRASEÑA:</span>
						<input class="input100" type="pass" name="apell" placeholder="escriba su contraseña">
						<span class="focus-input100"></span>
					</div>



					<div class="boton" >
						<br>
							<button type="button" class="btn btn-success">registrarse</button>
					</div>

					
					
				</form>
			</div>
		</div>
	</div>
