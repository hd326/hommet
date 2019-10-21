<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_agent = new Role();
        $role_agent->name = 'agent';
        $role_agent->description = 'A real estate agent';
        $role_agent->save();

        $role_administrator = new Role();
        $role_administrator->name = 'administrator';
        $role_administrator->description = 'An administrator';
        $role_administrator->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'A user';
        $role_user->save();
    }
}
