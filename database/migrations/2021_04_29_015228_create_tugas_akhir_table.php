<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasAkhirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_akhir', function (Blueprint $table) {
            $table->id();
            $table->string('judul',100);
            $table->string('nim');
            $table->string('nama');
            $table->integer('wisuda');
            $table->enum('fakultas',['Program pasca Sarjana','Ilmu budaya','-','Tehnik','Kesehatan','Ekonomi & Bisnis','Ilmu Komputer']);
            $table->string('pdf')->nullable();
            $table->string('judulindo',100)->nullable();
            $table->string('juduling',100)->nullable();
            $table->string('cover',100)->nullable();
            $table->string('abstrak',999)->nullable();
            $table->string('isi',100)->nullable();
            $table->string('setujuta',100)->nullable();
            $table->string('sahta',100)->nullable();
            $table->string('publikasi',100)->nullable();
            $table->string('asli',100)->nullable();
            $table->string('jurnal',100)->nullable();
            $table->string('bab1',100)->nullable();
            $table->string('bab2',100)->nullable();
            $table->string('bab3',100)->nullable();
            $table->string('bab4',100)->nullable();
            $table->string('bab5',100)->nullable();
            $table->string('bab6',100)->nullable();
            $table->string('dapus',100)->nullable();
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
        Schema::dropIfExists('tugas_akhir');
    }
}
