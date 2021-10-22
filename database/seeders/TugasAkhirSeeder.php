<?php

namespace Database\Seeders;

use App\Models\TugasAkhir;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TugasAkhirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $tugas_akhir = ['Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque, officiis!','Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, eaque.','Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, quo?','Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, iste!','Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, excepturi?'];

        // foreach($tugas_akhir as $item){
        //     TugasAkhir::create([
        //         'judul' => $item,
        //         'nama' => 'Teguh Wibowo',
        //         'nim' => 'A11.2017.10538',
        //         'wisuda' => 67
        //     ]);
        // }

        $faker = Faker::create();

        $limit = 2000;
        for($i = 1; $i <= $limit; $i++){
            TugasAkhir::create([
                'judul' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'wisuda' => $faker->numberBetween(1,70),
                'nama' => $faker->name(),
                'fakultas' => $faker->randomElement(['Program pasca Sarjana','Ilmu budaya','-','Tehnik','Kesehatan','Ekonomi & Bisnis','Ilmu Komputer']),
                'nim' => $faker->numerify('##########'),
             ]);
        }
    }
}
