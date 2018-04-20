<?php namespace App\Http\Controllers;

use App\Http\Traits\CRUD;
use App\Http\Traits\RESTActions;

class User extends Controller {
	const MODEL = \App\User::class;
	use RESTActions;

	/* Pages */
	public function addUser() {
		return view('user/add');
	}
}
