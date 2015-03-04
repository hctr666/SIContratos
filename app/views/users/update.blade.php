<h1>Editar Usuario</h1>
{{Form::open()}}
	Real Name: {{Form::text('txtname', $user->real_name)}}<br/>
	Email: {{Form::text('txtemail', $user->email)}}<br/>
	Password: {{Form::password('password')}}<br/>
	{{Form::submit('Guardar cambios')}}
{{Form::close()}}
