<?php
/**
 * Created by PhpStorm.
 * User: lonelytomb
 * Date: 2/19/18
 * Time: 9:21 PM
 */

namespace App\Http\Controllers\Auth;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;


class AdminRegisterController extends Controller
{
	/**
	 * Where to redirect admins after registration.
	 * @var string
	 */
	protected $redirectTo = '/adminSite';

	/**
	 * Create a new controller instance.
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest:admin');
	}

	/**
	 * Get a validator for an incoming registration request.
	 * @param  array $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data)
	{
		return Validator::make($data, [
			'first_name' => 'required|string|max:255',
			'other_names' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
			'gender' => 'required|string|max:255',
			'phone_number' => 'required|string|max:255',
			'password' => 'required|string|min:6|confirmed',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 * @param  array $data
	 * @return \App\Models\Admin
	 */
	protected function create(array $data)
	{
		return Admin::create([
			'first_name' => $data['first_name'],
			'other_names' => $data['other_names'],
			'gender' => $data['gender'],
			'email' => $data['email'],
			'phone_number' => $data['phone_number'],
			'password' => Hash::make($data['password']),
		]);
	}

	/**
	 * Show the application registration form.
	 * @return \Illuminate\Http\Response
	 */
	public function showRegistrationForm()
	{
		return view('admin.auth.register');
	}

	/**
	 * Handle a registration request for the application.
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function register(Request $request)
	{
		$this->validator($request->all())->validate();

		event(new Registered($admin = $this->create($request->all())));

		$this->guard()->login($admin);

		return $this->registered($request, $admin)
			?: redirect()->intended($this->redirectPath());
	}

	/**
	 * Get the guard to be used during registration.
	 * @return \Illuminate\Contracts\Auth\StatefulGuard
	 */
	protected function guard()
	{
		return Auth::guard('admin');
	}

	/**
	 * The user has been registered.
	 * @param  \Illuminate\Http\Request $request
	 * @param  mixed $user
	 * @return mixed
	 */
	protected function registered(Request $request, $user)
	{
		//
	}
}