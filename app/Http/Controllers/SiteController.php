<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
	/**
	 * Create a new controller instance.
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application dashboard.
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function shop()
	{
		return view('welcome');
	}

	public function collection()
	{
		return view('welcome');
	}

	public function faqs()
	{
		return view('welcome');
	}

	public function about()
	{
		return view('welcome');
	}

	public function contact()
	{
		return view('welcome');
	}

	public function adminSite()
	{
		return view('admin.welcome');
	}
}
