<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'=>'admin',
            'name'=>'mdtu',
            'role_id'=>1,
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'phone' => '87654321',
            'address' => 'pointpetro',
            'gender' => 'male',
            'city' => 'jaffna',
        ]);
        DB::table('users')->insert([
            'username'=>'user',
            'name'=>'milo',
           'role_id'=>2,
            'email' => 'user@user.com',
            'password' => bcrypt('user123'),
            'phone' => '12345678',
            'address' => 'jaffna',
            'gender' => 'male',
            'city' => 'jaffna',
        ]);

    }
}
