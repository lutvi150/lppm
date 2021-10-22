<?php

namespace Database\Seeders;

use App\Models\Majalah;
use Illuminate\Database\Seeder;

class MajalahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['ANALISIS MINAT BELI WANITA TERHADAP PRODUK TA','ASET','CYBERKU','DIAN','DINAMIKA BAHASA DAN BUDAYA','DINAMIKA SOSIAL EKONOMI','ELEKTRO INDONESIA','HIMSYATECH','IEICE','IEICE TRANS. ON COMMUNICATIONS','INTERNATIONAL CONFERENCE ON INFORMATION TECHNOLOGY, COMPUTER, AND ELECTRICAL ENGINEERING (ICITACEE)',
                 'INTERNATIONAL JOURNAL OF FUTURE COMPUTER AND','INTERNATIONAL SEMINAR ON APPLICATION FOR TECHNOLOGY OF INFORMATION AND COMMUNICATION (ISEMANTIC)','IPTEK-KOM'];

        $eksternals = ['2016 1ST INTERNATIONAL CONFERENCE ON BIOMEDICAL ENGINEERING (IBIOMED)','2017 4TH INTERNATIONAL CONFERENCE ON ELECTRICAL ENGINEERING, COMPUTER SCIENCE AND INFORMATICS (EECSI)',
                      '(ICOIACT 2018) INTERNATIONAL CONFERENCE ON INFORMATION AND COMMUNICATIONS TECHNOLOGY','1ST INTERNATIONAL CONFERENCE ON INFORMATICS AND COMPUTATIONAL SCIENCES (ICICOS) 2017',
                      '2015 INTERNATIONAL CONFERENCE ON SCIENCE IN I','2017 INTERNATIONAL CONFERENCE ON INNOVATIVE AND CREATIVE INFORMATION TECHNOLOGY (ICITECH)','4TH INTERNATIONAL CONFERENCE ON ELECTRICAL ENGINEERING, COMPUTER SCIENCE AND INFORMATICS (EECSI 2017)',
                      '5TH CITSM 2017 INTERNATIONAL CONFERENCE OF CYBER AND IT SERVICE MANAGEMENT','AN ADAPTIVE AND COST-EFFECTIVE DATA TRANSMISS','ARTE-POLIS 4','BANDUNG CREATIVE MOVEMENT','BENEFIT: JURNAL MANAJEMEN DAN BISNIS'];
        foreach($data as $item){
            Majalah::create([
                'title' => $item,
                'tipe' => 'internal',
                'date' => date('Y-m-d'),
                'images' => 'book.jpg',
            ]);
        }
        foreach($eksternals as $eksternal){
            Majalah::create([
                'title' => $eksternal,
                'tipe' => 'eksternal',
                'date' => date('Y-m-d'),
                'images' => 'book.jpg',
            ]);
        }
    }
}
