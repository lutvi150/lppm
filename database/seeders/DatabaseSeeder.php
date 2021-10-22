<?php

namespace Database\Seeders;

use App\Models\Penelitian;
use App\Models\TugasAkhir;
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
        $this->call(PenelitianFaker::class);
        $this->call(PengabdianFaker::class);
        $this->call(MajalahSeeder::class);
        $this->call(ProsidingSeeder::class);
        $this->call(TugasAkhirSeeder::class);
        $this->call(UserSeeder::class);
    }
}
