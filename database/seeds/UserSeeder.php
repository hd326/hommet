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
        $role_agent = Role::where('name', 'agent')->first();
        $role_administrator = Role::where('name', 'administrator')->first();
        $role_user = Role::where('name', 'user')->first();


        $agent = new User();
        $agent->name = 'Employee Name';
        $agent->email = 'employee@example.com';
        $agent->password = bcrypt('secret');
        $agent->save();
        $agent->roles()->attach($role_agent);


        $administrator = new User();
        $administrator->name = 'Manager Name';
        $administrator->email = 'manager@example.com';
        $administrator->password = bcrypt('secret');
        $administrator->save();
        $administrator->roles()->attach($role_administrator);

        $user = new User();
        $user->name = 'User name';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
        
        factory(App\User::class, 10)->create();
    }
}
