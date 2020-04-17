<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DQC84;
use App\DQCMODEL;
use Faker\Generator as Faker;

function randCode($n = 6) {
    $characters = 'ABCDGHKMOQRSUVWXZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    $randomString[strlen($randomString) - 2] = rand(0, 9);

    return $randomString;
}

$factory->define(DQC84::class, function (Faker $faker) {
    $randomModel = random_int(\DB::table('DQCMODEL')->min('ID'), \DB::table('DQCMODEL')->max('ID'));
    $randomModel = DQCMODEL::find($randomModel);
    $idForeign = $randomModel->ID;
    $MODEL = $randomModel->MODEL;

    return [
        'FAT_PART_NO' => $MODEL . randCode(),
        'MODEL' => $idForeign,
        'TOTAL_LOCATION' => $faker->numberBetween(0,999),
    ];
});
