<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Interaction;
use Faker\Generator as Faker;

$factory->define(Interaction::class, function (Faker $faker) {
    return [
        'interaccion'=>$faker->sentence(5)
       
    ];
});
