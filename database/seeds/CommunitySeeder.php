<?php

use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('communities')->insert([
            'name' => 'Roseville'
        ]);

        DB::table('communities')->insert([
            'name' => 'Rocklin'
        ]);

        DB::table('communities')->insert([
            'name' => 'Elk Grove'
        ]);

        DB::table('communities')->insert([
            'name' => 'Citrus Heights'
        ]);

        DB::table('communities')->insert([
            'name' => 'Placerville'
        ]);

        DB::table('communities')->insert([
            'name' => 'Rancho Cordova'
        ]);

        DB::table('communities')->insert([
            'name' => 'Galt'
        ]);

        DB::table('communities')->insert([
            'name' => 'Folsom'
        ]);
    }
}
