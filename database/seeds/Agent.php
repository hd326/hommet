<?php

use Illuminate\Database\Seeder;

class Agent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Agent::class, 12)->create();
    }
}
