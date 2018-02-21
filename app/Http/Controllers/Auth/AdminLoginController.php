<?php
/**
 * Created by PhpStorm.
 * User: lonelytomb
 * Date: 2/19/18
 * Time: 7:58 PM
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
	protected $redirectTo = '/adminSite';

	use AuthenticatesUsers;

	public function __construct()
	{
		$this->middleware('guest:admin', ['except' => 'logout']);
	}

	public function showLoginForm()
	{
		return view('admin.auth.login');
	}

	/**
	 * Log the user out of the application.
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function logout(Request $request)
	{
		$this->guard()->logout();

		$request->session()->invalidate();

		return redirect()->route($this->redirectTo);
	}

	/**
	 * Get the guard to be used during authentication.
	 * @return \Illuminate\Contracts\Auth\StatefulGuard
	 */
	protected function guard()
	{
		return Auth::guard('admin');
	}

}