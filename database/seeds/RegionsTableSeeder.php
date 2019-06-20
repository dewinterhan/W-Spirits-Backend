<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert(['region'=>'speyside']);
        DB::table('regions')->insert(['region'=>'highlands']);
        DB::table('regions')->insert(['region'=>'lowlands']);
        DB::table('regions')->insert(['region'=>'islay']);
        DB::table('regions')->insert(['region'=>'campbeltown']);
        DB::table('regions')->insert(['region'=>'the islands']);
    }
}
