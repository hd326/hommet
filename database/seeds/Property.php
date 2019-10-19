<?php

use Illuminate\Database\Seeder;

class Property extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Property::class, 50)->create();
    }
}
