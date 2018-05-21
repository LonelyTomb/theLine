<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
	use Notifiable;

	/**
	 * The attributes that are mass assignable.
	 * @var array
	 */
	protected $fillable = [
		'first_name', 'other_names', 'gender', 'email', 'address_1', 'city', 'state', 'country', 'postal_code', 'shipping_address', 'phone_number', 'password'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];
}
