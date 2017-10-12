<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Question::class, function (Faker $faker) {
    return [
    	'user_id'=> function()
    	{
    		return factory(App\User::class)->create()->id;
    	},
 		 'owner_id' => function()
    	{
    		return factory(App\User::class)->create()->id;
    	},
        'questions' => $faker->paragraph,
        'is_anonymous' => $faker->boolean,
    ];
});
$factory->define(App\Answer::class, function (Faker $faker) {
    return [
    	'user_id'=> function()
    	{
    		return factory(App\User::class)->create()->id;
    	},
 		 'owner_id' => function()
    	{
    		return factory(App\User::class)->create()->id;
    	},
    	'question_id' => function()
    	{
    		return factory(App\Question::class)->create()->id;
    	},
        'answer' => $faker->paragraph,
        'is_anonymous' => $faker->boolean,
    ];
});


