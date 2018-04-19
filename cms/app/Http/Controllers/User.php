<?php namespace App\Http\Controllers;

use App\Http\Traits\CRUD;

class User extends Controller {
	const MODEL = \App\User::class;
	use CRUD;

	/* Pages */

	public function addUser() {

		return view('user\add');
	}
}
