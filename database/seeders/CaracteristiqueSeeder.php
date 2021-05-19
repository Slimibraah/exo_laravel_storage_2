<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracteristiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("caracteristiques")->insert([
            'icon'=>"<i class='icofont-simple-smile'></i>",
            'chiffre'=>'330',
            'nom'=>'Card avec icon'
        ]);
        DB::table("caracteristiques")->insert([
            'icon'=>"<i class='icofont-document-folder'></i>",
            'chiffre'=>'330',
            'nom'=>'Card avec icon'
        ]);
        DB::table("caracteristiques")->insert([
            'icon'=>"<i class='icofont-live-support'></i>",
            'chiffre'=>'330',
            'nom'=>'Card avec icon'
        ]);
        DB::table("caracteristiques")->insert([
            'icon'=>"<i class='icofont-users-alt-5'></i>",
            'chiffre'=>'330',
            'nom'=>'Card avec icon'
        ]);
        DB::table("caracteristiques")->insert([
            'icon'=>"<i class='icofont-simple-smile'></i>",
            'chiffre'=>'330',
            'nom'=>'Card avec icon'
        ]);
    }
}
