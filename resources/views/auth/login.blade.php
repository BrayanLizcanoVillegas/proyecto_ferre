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
						FERRETERIA
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="correo requerido">
						<span class="label-input100">CORREO:</span>
						<input class="input100" type="text" name="username" placeholder="escriba su correo">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "contraseña requerida">
						<span class="label-input100">CONTRASEÑA:</span>
						<input class="input100" type="password" name="pass" placeholder="escriba su contraseña">
						<span class="focus-input100"></span>
					</div>

					<div class="hipervinculo">
						<br>
						<a href=" ">olvido su contraseña?</a>
					</div>

					<div class="boton1" ">
						<br>
							<button type="button" class="btn btn-success">entrar</button>
					</div>

					<div class="boton2" >
						<br>

						<!-- <button type="button" class="btn btn-success">registrarse</button> -->


					<button type="button" class="btn btn-success">registrarse</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>


@endsection