<?php

class HomeController extends BaseController {

	public $restful = true;

	public function getIndex()
	{
		return View::make('home.index');
	}

	public function getLogin() {
		return View::make('home.login');
	}

	public function postLogin() {
		$username = Input::get('username');
		$password = Input::get('password');
		$attempt = array('username' => $username, 'password' => $password);
		if (Auth::attempt($attempt)) {
			return "welcome back!";
		}
		// $log = User::where('username','=',$username)->first();
		// if (Hash::check($password,$log->password)) {
		// 	return "welcome back!";
		// }
		// else {
		// 	return "fail";
		// }
	}

}

?>
