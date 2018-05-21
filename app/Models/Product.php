<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	//
	protected $fillable = [
		'name', 'collection_id', 'price', 'status', 'description', 'units_total', 'units_remaining', 'image_link'
	];

	public function collection()
	{
		return $this->belongsTo(Collection::class);
	}

	public function report()
	{
		return $this->hasOne(Report::class);
	}

}
