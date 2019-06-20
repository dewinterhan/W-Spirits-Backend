<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['category'=>'Single Malt Whiskey']);
        DB::table('categories')->insert(['category'=>'Blended Whiskey']);
        DB::table('categories')->insert(['category'=>'Bourbon']);


    }
}
