<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content=""/>
	<meta name="keywords" content="" />
	<meta name="author" content="hctr"/>
    <link rel="shortcut icon" href="favicon.png">
	<title>Sistema de Gestión de Colaboradores</title>
	<!-- Bootstrap core CSS -->
	{{ HTML::style('assets/css/bootstrap.css'); }}

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/login.css'); }}
    {{ HTML::style('assets/css/animate-custom.css'); }}

    <!-- custom.modernizr script for this template -->
    {{ HTML::script('assets/js/custom.modernizr.js'); }}

</head>
<body>
<div class="container" id="login-block">
	<div class="row">
		<div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
			<div class="login-box clearfix animated flipInY">
				<div class="login-logo">
	        		<a href="#"><img src="assets/img/logo-small-2.png" alt="Industrias San Miguel" /></a>
				</div>
				<hr />
			    <div class="">
	        		<h3>Sistema de Gestión de Colaboradores</h3>
	        	</div>
	        	<hr />
		    	<h3 class="animated bounceInDown inises">Iniciar sesión</h3>	        	
		    	<div class="login-form">
		    		<div class="alert alert-error hide">
		    			<button type="button" class="close" data-dismiss="alert">&times;</button>
		    			<h4>¡Error!</h4>
		    			Mensaje de error.
		    		</div>
		    		{{ Form::open(array('url' => '/login')) }}
						{{ Form::text('email', Input::old('email'), array('placeholder'=>'Email')) }}
						{{ Form::password('pass', array('placeholder' => 'Contraseña')) }}
						<div class="checkbox">
							<label>{{ Form::checkbox('rememberme', true) }}Recordar cl</label>
						</div>
						{{ Form::submit('Acceder', array('class' => 'btn btn-login')) }}
					{{ Form::close() }}
		    	</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
{{Form::open(array('url' => '/login'))}}
	Email: {{Form::text('email', Input::old('email'))}}<br/>
	Password: {{Form::password('pass')}}<br/>
	Recordar contraseña
	{{ Form::checkbox('rememberme', true) }}<br/>
	{{Form::submit('login')}}
{{Form::close()}}<br/>
@if(Session::has('mensaje_error'))
	<!--div class="alert alert-danger"-->
	{{ Session::get('mensaje_error') }}
	<!--/div-->
@endif