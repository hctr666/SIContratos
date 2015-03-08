<?php 

class UserController extends BaseController
{
	/**
	 * Carga una tabla con los usuarios registrados 
	 * @return view users/home
	 */
	public function get_index(){
		$users = User::all();
		return View::make("users.home") -> with('users', $users);
	}

	/**
	 * Carga un formulario para registrar un nuevo usuario 
	 * @return view users/create
	 */
	public function get_create(){
		return View::make("users.create");
	}

	/**
	 * Envia los datos ingresados del usuario
	 * @return view users/home
	 */
	public function post_create(){
		$user = new User;
		$user->real_name = Input::get('txtname');
		$user->email = Input::get('txtemail');
		#$user->password = Input::get('txtpass');
		$user->set_password(Input::get('txtpass'));
		#$user->set_password(Input::get('txtpass'));
		$user->save();
		#get_index();
		#return "el formulario ha sido posteado.";
		return Redirect::to('user');
	}

	/**
	 * Elimina un usuario de la base de datos 
	 * @return view users/home
	 */
	public function get_delete($user_id){
		$user = User::find($user_id);

		if (is_null($user)) {
			return Redirect::to('user');
		}
		
		$user->delete();
		return Redirect::to('user');
	}

	/**
	 * Carga un formulario para editar un usuario 
	 * @return view users/update
	 */
	public function get_update($user_id){
		$user = User::find($user_id);
		
		if (is_null($user)) {
			return Redirect::to('user');
		}
		
		return View::make('users.update')->with('user', $user);
	}

	/**
	 * Envia los datos editados del usuario 
	 * @return view users/home
	 */
	public function post_update($user_id){
		$user = User::find($user_id);
		
		if (is_null($user)) {
			return Redirect::to('user');
		}

		$user->real_name = Input::get('txtname');
		$user->email = Input::get('txtemail');

		if (Input::has('password')) {
			$user->password = Input::get('password');
			$user->set_password($user->password);
		}

		$user->save();
		return Redirect::to('user');
	}
}