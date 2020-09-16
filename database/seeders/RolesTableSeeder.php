<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            array('id' => '1', 'name' => 'admin' ),
            array( 'id' => '2','name' => 'user')]
        );

/* 
        DB::table('users')->insert(
            array(
                'id' => "1",
                'name' => "arun",
                'email' => "arun@app.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10)
            )
        ); */

        DB::table('user_roles')->insert([
            array('user_id' => '1', 'role_id' => '1' ),
            array( 'user_id' => '1','role_id' => '2')]
        );




       

    }
}