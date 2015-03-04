<?php 

class AuthController extends BaseController
{
	
	/** 
	 * carga el formulario para inicio de sesión.
	 * @return view login
	 */
	public function get_login()
	{
		if (Auth::check()) {
			return Redirect::to('user');
		}
		return View::make('auth.login');		
	}

	/** 
	 * envia las credenciales (email y contraseña) y las valida.
	 * @return view login
	 */
	public function post_login()
	{
		$credentials = array(
			'email' => Input::get('email'),
			'password' => Input::get('pass')
		);

		if (Auth::attempt($credentials, Input::get('rememberme', 0))) 
		{
			#return "El usuario ha sido identificado correctamente.";
			#return Redirect::to('user');
			return Redirect::to('user');
		}
		else
		{
			#return "datos incorrectos";
	        return Redirect::to('login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
			#return Redirect::back()->with_input();
		}
	}
}
