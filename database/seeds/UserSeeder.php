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
        /**
         * Inserting Admin User
         */
        DB::table('users')->insert(
            [
                'name' => 'Sandeep Pardeshi',
                'email' => 'sandeeppardeshi3003@yahoo.com',
                'email_verified_at' => now(),
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
                'is_admin' => true
            ]
        );

        /**
         * Inserting regular user
         */
        DB::table('users')->insert(
            [
                'name' => 'Sam Fischer',
                'email' => 'sam@fischer.com',
                'email_verified_at' => now(),
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'remember_token' => Str::random(10),
                'is_admin' => false
            ]
        );
    }
}
