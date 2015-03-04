<!DOCTYPE html>
<html>
<head>
	<title>Users view</title>
</head>
<body>
	<h1>Usuarios</h1>
		<table border="1px">
			<thead style="background-color:cyan;">
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Email</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
			@if($users)
				@foreach($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->real_name}}</td>
					<td>{{$user->email}}</td>
					<td>{{HTML::link('user/delete/'.$user->id, 'Borrar')}}</td>
					<td>{{HTML::link('user/update/'.$user->id, 'Editar')}}</td>
				</tr>
				@endforeach
			@else
				<font color="red">No hay usuarios registrados</font>
			@endif
			</tbody>
		</table>
<br/>
{{HTML::link('user/create', 'Nuevo usuario')}}
</body>
</html>