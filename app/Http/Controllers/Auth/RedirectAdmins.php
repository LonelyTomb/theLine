<?php
/**
 * Created by PhpStorm.
 * User: lonelytomb
 * Date: 2/19/18
 * Time: 9:44 PM
 */

namespace App\Http\Controllers\Auth;

trait RedirectAdmins
{
	public function redirectPath()
	{
		if (method_exists($this, 'redirectTo')) {
			return $this->redirectTo();
		}
		return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
	}
}


