<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_administrator = Role::where('name', 'administrator')->first();
        $role_moderator = Role::where('name', 'moderator')->first();
        $role_user = Role::where('name', 'user')->first();

        $administrator = new User();
        $administrator->name = 'administrator';
        $administrator->email = 'admin@admin.com';
        $administrator->password = Hash::make('admin');
        $administrator->save();
        $administrator->roles()->attach($role_administrator);

        $moderator = new User();
        $moderator->name = 'moderator';
        $moderator->email = 'moderator@moderator.com';
        $moderator->password = Hash::make('moderator');
        $moderator->save();
        $moderator->roles()->attach($role_moderator);

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@user.com';
        $user->password = Hash::make('user');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
