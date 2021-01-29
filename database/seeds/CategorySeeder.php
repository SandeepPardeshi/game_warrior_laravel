<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds to insert data in categories table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Adventure'
        ]);

        DB::table('categories')->insert([
            'name' => 'Shooter'
        ]);

        DB::table('categories')->insert([
            'name' => 'Racing'
        ]);

        DB::table('categories')->insert([
            'name' => 'Horror'
        ]);

        DB::table('categories')->insert([
            'name' => 'Strategy'
        ]);
    }
}
