<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMajalahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('majalahs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->enum('tipe',['internal','eksternal']);
            $table->string('images');
            $table->string('tahun')->nullable();
            $table->enum('fakultas',['Program pasca Sarjana','Tidak ada','Ilmu budaya','-','Tehnik','Kesehatan','Ekonomi & Bisnis','Ilmu Komputer']);
            $table->string('peneliti',170)->nullable();
            $table->enum('kategori',['Penelitian Kerjasama Antar Perguruan Tinggi','Penelitian Pasca Doktor (PPD)','Penelitian Terapan Unggulan Perguruan Tinggi','Penelitian Produk Terapan','Penelitian Kerjasama Luar Negeri (PKLN)','Grant Research','Penelitian Terapan','nama','Masterplan Percepatan dan Perluasan Pembangun','HKI - Paten','Penelitian Hibah Pekerti PHP','Kementrian Riset dan Teknologi','Penelitian Hibah Fundamental PHF','Penelitian Kerjasama Antar Lembaga PKL','Penelitian Dasar','Dinas Pendidikan Provinsi Jateng','Peneliti']);
            $table->string('npp',50)->nullable();
            $table->string('nidn',50)->nullable();
            $table->string('jabfung',100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('majalahs');
    }
}
