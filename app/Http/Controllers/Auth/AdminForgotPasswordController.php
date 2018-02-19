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
}