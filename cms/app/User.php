<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User {
	use Notifiable;
	use SoftDeletes;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'middle_name',
		'last_name',
		'gender',
		'email',
		'password',
		'street',
		'street2',
		'house_number',
		'zip',
		'city',
		'country',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password',
		'remember_token',
	];

	static $rules = [
		'name'         => 'required',
		'middle_name'  => '',
		'last_name'    => 'required',
		'gender'       => 'required',
		'email'        => 'required',
		'password'     => 'required',
		'street'       => 'required',
		'street2'      => '',
		'house_number' => 'required',
		'zip'          => 'required',
		'city'         => 'required',
		'country'      => 'required',
	];
}
