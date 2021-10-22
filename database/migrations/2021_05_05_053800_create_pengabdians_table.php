<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengabdiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengabdians', function (Blueprint $table) {
            $table->id();
            $table->string('judul',255);
            $table->string('tahun')->nullable();
            $table->string('peneliti',170)->nullable();
            $table->enum('fakultas',['Ilmu budaya','-','Tehnik','Kesehatan','Ekonomi & Bisnis','Ilmu Komputer']);
            $table->enum('kategori',['IBm Ipteks Kreatifitas Kampus','IBm Ipteks Bagi Masyarakat']);
            $table->string('pdf')->nullable();
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
        Schema::dropIfExists('pengabdians');
    }
}
