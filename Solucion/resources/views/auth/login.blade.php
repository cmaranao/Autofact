@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">Acceso al sistema</h1>				
			</div>
			<div class="panel-body">
				<form method="POST" action="{{ route ('login')}}">
					{{ csrf_field() }}
					<div class="form-group {{ $errors->has('email') ? 'has-error':''}}">
						<label for="email">Correo</label>
						<input class="form-control" 
						type="email" 
						name="email" 
						placeholder="Ingrese su Correo">
						{!! $errors->first('email','<span class="help-block">:message</span>')!!}
					</div>
					<div class="form-group {{ $errors->has('password') ? 'has-error':''}}">
						<label for="password">Contraseña</label>
						<input class="form-control" 
						type="password" 
						name="password" 
						placeholder="Ingrese su Contraseña">
						{!! $errors->first('password','<span class="help-block">:message</span>')!!}
					</div>
					<button class="btn btn-primary btn-block">Acceder</button>
				</form>
				
			</div>

		</div>
	</div>
</div>
@endsection