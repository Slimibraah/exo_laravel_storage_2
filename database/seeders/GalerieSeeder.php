<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("galeries")->insert([
            'nom'=>'Gaga',
            'image'=>'je vais mettre une image',
            'description'=>'Petite description',
        ]);
    }
}
