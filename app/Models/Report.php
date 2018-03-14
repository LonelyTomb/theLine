<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
	//
	protected $fillable = [
		'product_id', 'total_sold'
	];

	public function product()
	{
		$this->belongsTo(Product::class);
	}
}
