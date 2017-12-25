<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::where('name', 'admin')->first();
        $roleMember  = Role::where('name', 'member')->first();
        $employee = new User();
        $employee->name = 'Admin';
        $employee->email = 'admin@example.com';
        $employee->password = bcrypt('123456');
        $employee->save();
        $employee->roles()->attach($roleAdmin);
        $manager = new User();
        $manager->name = 'Member';
        $manager->email = 'member@example.com';
        $manager->password = bcrypt('123456');
        $manager->save();
        $manager->roles()->attach($roleMember);
    }
}
