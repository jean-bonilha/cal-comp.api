<?php

use Illuminate\Database\Seeder;

class DQC841Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // How to many DQC841 you need, defaulting to 10

        $count = (int)$this->command->ask('How to DQC841 do you need ?', 40);

        if ($count < 40) {
            $count = 40;
            $this->command->info("The minor value for number of DQC841 need be 40.");
        };

        $this->command->info("Creating {$count} DQC841.");

        // Create the DQC841

        factory(App\DQC841::class, $count)->create();

        $this->command->info('DQC841 created!');
    }
}
