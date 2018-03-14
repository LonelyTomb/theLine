<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//
	protected $fillable = [
		'name', 'collection_id', 'price', 'status', 'units_total', 'units_remaining', 'image_link'
	];

	public function collection()
	{
		$this->belongsTo(Collection::class);
	}

}
