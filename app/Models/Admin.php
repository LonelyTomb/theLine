<?php

namespace App\Models;

use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticate
{
	protected $guard = 'admin';

	use Notifiable;

	protected $fillable = [
		'first_name', 'other_names', 'email', 'phone_number', 'gender'
	];

	protected $hidden = [
		'password', 'remember_token'
	];

	public function sendPasswordResetNotification($token)
	{
		$this->notify(new AdminResetPasswordNotification($token));
	}
}
