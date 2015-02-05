<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use View;
use Theme;

class CategoriesController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index() {

		Theme::setLayout('admin.app');
		View::share('title', 'Neveshtar.com');
		return Theme::view('admin/categories');
	}

}
