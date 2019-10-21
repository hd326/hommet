<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$role_agent = Role::where('name', 'agent')->first();
        //$role_administrator = Role::where('name', 'administrator')->first();
        //$agent = new User();
        //$agent->name = 'Richard';
        //$agent->email = 'r_duong89@yahoo.com';
        //$agent->password = bcrypt('secret');
        //$agent->save();
        //$agent->roles()->attach($role_agent);
        //$administrator = new User();
        //$administrator->name = 'Hung';
        //$administrator->email = 'rduong89@gmail.com';
        //$administrator->password = bcrypt('secret');
        //$administrator->save();
        //$administrator->roles()->attach($role_administrator);
        factory(App\User::class, 11)->create();
    }
}
