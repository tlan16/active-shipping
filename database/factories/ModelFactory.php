<?php

/*
 * |--------------------------------------------------------------------------
 * | Model Factories
 * |--------------------------------------------------------------------------
 * |
 * | Here you may define all of your model factories. Model factories give
 * | you a convenient way to create models for testing and seeding your
 * | database. Just tell the factory how a default model should look.
 * |
 */
$factory->define ( App\Modules\System\Models\User::class, function (Faker\Generator $faker) {
	return [ 
			'active' => 1,
			'created' => $faker->dateTime,
			'updated' => $faker->dateTime,
			'createdById' => 1,
			'updatedById' => 1,
			'firstname' => $faker->firstName,
			'lastname' => $faker->lastName,
			'email' => $faker->email 
	];
} );
$factory->define ( App\Modules\System\Models\Role::class, function (Faker\Generator $faker) {
	return [ 
			'active' => 1,
			'created' => $faker->dateTime,
			'updated' => $faker->dateTime,
			'name' => $faker->name 
	];
} );
$factory->define ( App\Modules\System\Models\Credential::class, function (Faker\Generator $faker) {
	$types = App\Modules\System\Models\Credential::getCredentialTypes ();
	return [ 
			'active' => 1,
			'created' => $faker->dateTime,
			'updated' => $faker->dateTime,
			'username' => $faker->userName,
			'password' => $faker->sha1,
			'type' => $types [rand ( 1, count ( $types ) - 1 )] 
	];
} );
$factory->define ( App\Modules\MoneyPool\Models\Group::class, function (Faker\Generator $faker) {
	$types = App\Modules\System\Models\Credential::getCredentialTypes ();
	return [ 
			'active' => 1,
			'created' => $faker->dateTime,
			'updated' => $faker->dateTime,
			'name' => $faker->name,
			'description' => $faker->text(255),
	];
} );

