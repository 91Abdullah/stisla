<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Abdullah',
                'username' => 'abdullah',
                'password' => bcrypt('abdullah'),
            ],
            [
                'name' => 'Admin',
                'username' => 'admin',
                'password' => bcrypt('admin123'),
            ]
        ]);

        $role = Role::where('name', 'superadmin')->first();
        $roleAdmin = Role::where('name', 'admin')->first();

        $userSuper = User::where('username', 'abdullah')->first()->roles()->attach($role->id);
        $userAdmin = User::where('username', 'admin')->first()->roles()->attach($roleAdmin->id);
    }
}
