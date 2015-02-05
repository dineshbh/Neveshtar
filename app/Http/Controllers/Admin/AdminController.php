<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use View;
use Theme;
use Auth;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function index() {

		Theme::setLayout('admin.app');
		View::share('title', 'Neveshtar.com');
		return Theme::view('admin/index');
	}

}
