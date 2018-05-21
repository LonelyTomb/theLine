<?php
/**
 * Created by PhpStorm.
 * User: lonelytomb
 * Date: 2/19/18
 * Time: 7:56 PM
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class AdminForgotPasswordController extends Controller
{
	use SendsPasswordResetEmails;

	/**
	 * Create a new controller instance.
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest:admin');
	}

	public function showLinkRequestForm()
	{
		return view('admin.auth.passwords.email');
	}

	/**
	 * Get the broker to be used during password reset.
	 * @return \Illuminate\Contracts\Auth\PasswordBroker
	 */
	public function broker()
	{
		return Password::broker('admins');
	}
}