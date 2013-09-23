<?php

class UsersController extends BaseController {

	public $restful = true;

	public function getLogin() {
		if (!Auth::user())
			return View::make('Users.login');
		else
			return Redirect::to('/');
	}

	public function postLogin() {
		$username = Input::get('username');
		$password = Input::get('password');
		$credentials = array('username' => $username, 'password' => $password);
		if (Auth::attempt($credentials)) {
			return Redirect::to('/');
		}
		else {
			return Redirect::to('users/login')->with('login_errors',true);
		}
		// $log = User::where('username','=',$username)->first();
		// if (Hash::check($password,$log->password)) {
		// 	return "welcome back!";
		// }
		// else {
		// 	return "fail";
		// }
	}

	public function getLogout() {
		Auth::logout();
		return Redirect::to('/');
	}

	public function getManage() {
		if (Auth::user()) {
			$posts = Post::where('author_id', '=', Auth::user()->id)->get();
			return View::make('users.manage',compact('posts'));
		}

		return Redirect::to('/');
	}

}

?>
