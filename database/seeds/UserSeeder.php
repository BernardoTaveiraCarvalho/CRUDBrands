<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \DB::table('users')->insert([
                'name'      => 'Admin' ,
                'email'=> 'eee@gmail.com',
                'email_verified_at' =>now(),
                'password' =>bcrypt('123456'),
                'admin'=>1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);

    }
}
