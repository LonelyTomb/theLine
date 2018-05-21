<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
	return [
		'first_name' => $faker->name,
		'other_names' => $faker->name,
		'gender' => $faker->randomElement(['male', 'female']),
		'email' => 'theLineAdmin@theLine.com',
		'phone_number' => $faker->phoneNumber,
		'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
		'remember_token' => str_random(10),
	];
});
