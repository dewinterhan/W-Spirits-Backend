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
        DB::table('categories')->insert(['name'=>'Single Malt Whiskey']);
        DB::table('categories')->insert(['name'=>'Blended Whiskey']);
        DB::table('categories')->insert(['name'=>'Bourbon']);


    }
}
