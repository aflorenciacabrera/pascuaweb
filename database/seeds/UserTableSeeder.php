<?php

use Illuminate\Database\Seeder;
use pascuaweb\User;
use pascuaweb\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'User';
        $user->email = 'andrecontreras24@hotmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'aflorenciacabrera@gmail.com';
        $user->password = bcrypt('123456');
        $user->save();
        $user->roles()->attach($role_admin);
     }
    }

