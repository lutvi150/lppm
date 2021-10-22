<?php

namespace Database\Seeders;

use App\Models\Prosiding;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProsidingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        $limit = 200;
        for($i = 1; $i <= $limit; $i++){
            Prosiding::create([
                'judul' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'periode' => $faker->dateTimeBetween('now', '+1 years'),
                'issn' => $faker->numerify('###-####-###'),
             ]);
        }
    }
}
