<?php

use Illuminate\Database\Seeder;

class DQC84Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How to many DQC84 you need, defaulting to 10

        $count = (int)$this->command->ask('How to DQC84 do you need ?', 20);

        if ($count < 20) {
            $count = 20;
            $this->command->info("The minor value for number of DQC84 need be 20.");
        };

        $this->command->info("Creating {$count} DQC84.");

        // Create the DQC84

        factory(App\DQC84::class, $count)->create();

        $this->command->info('DQC84 created!');
    }
}
