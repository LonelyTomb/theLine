<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckoutHistory extends Model
{
	//
	protected $table = 'checkout_history';

	protected $fillable = [
		'user_id', 'cart', 'payerId', 'paymentId', 'token'
	];
}
