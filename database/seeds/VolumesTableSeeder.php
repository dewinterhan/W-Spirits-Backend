<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VolumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('volumes')->insert(['volume'=>'70']);
        DB::table('volumes')->insert(['volume'=>'75']);
        DB::table('volumes')->insert(['volume'=>'100']);
        DB::table('volumes')->insert(['volume'=>'175']);
    }
}
