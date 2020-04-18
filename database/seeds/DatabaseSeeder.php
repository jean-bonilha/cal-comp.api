<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DQCMODELSeeder::class);
        $this->call(DQC84Seeder::class);
        $this->call(DQC841Seeder::class);
    }
}
