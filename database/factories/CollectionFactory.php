<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Collection::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'description' => $faker->paragraph,
		'status' => 'available'
	];
});
