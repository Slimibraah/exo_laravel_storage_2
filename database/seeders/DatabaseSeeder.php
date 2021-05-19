<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(GalerieSeeder::class);
        $this->call(CaracteristiqueSeeder::class);
        $this->call(ServiceSeeder::class);

    }
}
