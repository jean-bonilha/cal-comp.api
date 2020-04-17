<?php

use App\DQCMODEL;
use Illuminate\Database\Seeder;

class DQCMODELSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How to many DQCMODEL you need, defaulting to 10

        $count = (int)$this->command->ask('How to DQCMODEL do you need ?', 3);

        if ($count < 3) {
            $count = 3;
            $this->command->info("The minor value for number of DQCMODEL need be 3.");
        };

        $this->command->info("Creating {$count} DQCMODEL.");

        // Create the DQCMODEL

        for ($i=1; $i <= $count; $i++) {
            DQCMODEL::create([
                'MODEL' => 'SSS',
            ]);
        }


        $this->command->info('DQCMODEL created!');
    }
}
