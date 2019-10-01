<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_administrator = new Role();
        $role_administrator->name = 'administrator';
        $role_administrator->description = 'Simple God';
        $role_administrator->save();

        $role_moderator = new Role();
        $role_moderator->name = 'moderator';
        $role_moderator->description = 'Simple God Moderator';
        $role_moderator->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'Simple User';
        $role_user->save();        
    }
}
