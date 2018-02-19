<?php
/**
 * Created by PhpStorm.
 * User: lonelytomb
 * Date: 2/19/18
 * Time: 7:58 PM
 */

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminLoginController extends Controller
{
	protected $redirectTo = '/home';

	use RedirectAdmins;

	public function __construct()
	{
		$this->middleware('guest:admin', ['except' => 'logout']);
	}

	public function showLoginForm()
	{
		return view('auth.login');
	}

	/**
	 * Handle a login request to the application.
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
	 */
	public function login(Request $request)
	{
		$this->validateLogin($request);
	}


	/**
	 * Validate the user login request.
	 * @param  \Illuminate\Http\Request $request
	 * @return void
	 */
	protected function validateLogin(Request $request)
	{
		$this->validate($request, [
			$this->username() => 'required|string',
			'password' => 'required|string',
		]);
	}

	/**
	 * Attempt to log the admin into the application.
	 * @param  \Illuminate\Http\Request $request
	 * @return bool
	 */
	protected function attemptLogin(Request $request)
	{
		return $this->guard()->attempt(
			$this->credentials($request), $request->filled('remember')
		);
	}

	/**
	 * Get the needed authorization credentials from the request.
	 * @param  \Illuminate\Http\Request $request
	 * @return array
	 */
	protected function credentials(Request $request)
	{
		return $request->only($this->username(), 'password');
	}

	/**
	 * Send the response after the admin was authenticated.
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	protected function sendLoginResponse(Request $request)
	{
		$request->session()->regenerate();

		$this->clearLoginAttempts($request);

		return $this->authenticated($request, $this->guard()->user())
			?: redirect()->intended($this->redirectPath());
	}

	/**
	 * The user has been authenticated.
	 * @param  \Illuminate\Http\Request $request
	 * @param  mixed $user
	 * @return mixed
	 */
	protected function authenticated(Request $request, $user)
	{
		//
	}

	/**
	 * Get the failed login response instance.
	 * @param  \Illuminate\Http\Request $request
	 * @return \Symfony\Component\HttpFoundation\Response
	 * @throws ValidationException
	 */
	protected function sendFailedLoginResponse(Request $request)
	{
		throw ValidationException::withMessages([
			$this->username() => [trans('auth.failed')],
		]);
	}

	/**
	 * Get the login username to be used by the controller.
	 * @return string
	 */
	public function username()
	{
		return 'email';
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

		return redirect('/');
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