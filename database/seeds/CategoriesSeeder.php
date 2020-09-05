<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Camera'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Audio'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Equipment'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Lensa'
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Lighting'
        ]);
    }
}
