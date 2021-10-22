<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Pengabdian;
use Illuminate\Database\Seeder;

class PengabdianFaker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $limit = 400;
        for($i = 1; $i <= $limit; $i++){
            Pengabdian::create([
                'judul' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'tahun' => $faker->numberBetween(2010,2020),
                'fakultas' => $faker->randomElement(['Ilmu budaya','-','Tehnik','Kesehatan','Ekonomi & Bisnis','Ilmu Komputer']),
                'kategori' => $faker->randomElement(['IBm Ipteks Kreatifitas Kampus','IBm Ipteks Bagi Masyarakat']),
                'nidn' => $faker->numerify('###-###-####'),
                'npp' => $faker->numerify('##########'),
             ]);
        }
    }
}
