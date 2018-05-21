<?php

namespace App\Models;

use App\Notifications\AdminResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class Admin
 * @package App\Models
 */
class Admin extends Authenticatable
{
	protected $guard = 'admin';
	use Notifiable;

	protected $fillable = [
		'first_name', 'other_names', 'email', 'phone_number', 'gender','password'
	];

	protected $hidden = [
		'password', 'remember_token'
	];

	/**
	 * @param string $token
	 */
	public function sendPasswordResetNotification($token):void
	{
		$this->notify(new AdminResetPasswordNotification($token));
	}
}
