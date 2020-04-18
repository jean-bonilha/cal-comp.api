<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DQC84;
use App\DQC841;
use Faker\Generator as Faker;

$factory->define(DQC841::class, function (Faker $faker) {
    $randomModel = random_int(\DB::table('DQC84')->min('ID'), \DB::table('DQC84')->max('ID'));
    $randomModel = DQC84::find($randomModel);

    $dataFactory = [
        'FAT_PART_NO' => $randomModel->ID,
        'PARTS_NO' => randCode(11, true),
        'UNT_USG' => random_int(1, 99),
        'DESCRIPTION' => $faker->text(),
    ];

    if (random_int(0, 1)) {
        $dataFactory['REF_DESIGNATOR'] = $faker->text();
    }

    return $dataFactory;
});
