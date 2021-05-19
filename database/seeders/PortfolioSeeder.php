<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("portfolios")->insert([
            'nom'=>'tu seras un nom de portfolio',
            'image'=>'tu seras une image',
            'catégorie'=>'tu seras des catégorie avec des options',
            'description'=>'tu seras une description'
        ]);
    }
}
