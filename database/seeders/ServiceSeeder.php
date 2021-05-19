<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert([
            'icon'=>'<i class="fab fa-servicestack"></i>',
            'titre'=>'Abdel',
            'description'=>'tqt on est la',
            

        ]);
    }
}
