<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{

	protected $fillable = [
		'name', 'description', 'status', 'image_link'
	];


	public function product()
	{
		return $this->hasMany(Product::class);
	}
}
