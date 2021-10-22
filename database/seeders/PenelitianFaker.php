<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Penelitian;
class PenelitianFaker extends Seeder
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
            Penelitian::create([
                'judul' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'tahun' => $faker->numberBetween(2010,2020),
                'fakultas' => $faker->randomElement(['Program pasca Sarjana','Tidak ada','Ilmu budaya','-','Tehnik','Kesehatan','Ekonomi & Bisnis','Ilmu Komputer']),
                'peneliti' => 'admin',
                'kategori' => $faker->randomElement(['Penelitian Kerjasama Antar Perguruan Tinggi','Penelitian Pasca Doktor (PPD)','Penelitian Terapan Unggulan Perguruan Tinggi','Penelitian Produk Terapan','Penelitian Kerjasama Luar Negeri (PKLN)','Grant Research','Penelitian Terapan','nama','Masterplan Percepatan dan Perluasan Pembangun','HKI - Paten','Penelitian Hibah Pekerti PHP','Kementrian Riset dan Teknologi','Penelitian Hibah Fundamental PHF','Penelitian Kerjasama Antar Lembaga PKL','Penelitian Dasar','Dinas Pendidikan Provinsi Jateng','Penelitian Disertasi Doktor PDD','Mandiri','Penelitian Hibah Startegi Nasional PHS','Dosen Muda','Penelitian Dosen Pemula PDP','Institusi','Penelitian Hibah Bersaing PHB','Ipteks','Pemula']),
                'nidn' => $faker->numerify('###-###-####'),
                'npp' => $faker->numerify('##########'),
             ]);
        }
    }
}
