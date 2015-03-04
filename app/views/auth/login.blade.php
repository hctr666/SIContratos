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