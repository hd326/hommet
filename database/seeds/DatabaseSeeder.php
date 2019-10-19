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
        $this->call(Community::class);
        $this->call(Property::class);
        $this->call(Broker::class);
        $this->call(Agent::class);
    }
}
