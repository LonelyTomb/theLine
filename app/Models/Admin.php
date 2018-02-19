<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
	protected $guard = 'admin';

	protected $fillable = [
		'first_name', 'other_names', 'email', 'phone_number', 'gender'
	];

	protected $hidden = [
		'password', 'remember_token'
	];
}
