<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahLowongan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_lowongan', function (Blueprint $table) {
            
            $table->timestamps();
			$table->bigIncrements('id');
			$table->integer('matkul_id')->nullable();
			$table->string('prasyarat1', 255)->nullable();
			$table->string('prasyarat2', 255)->nullable();
			$table->string('prasyarat3', 255)->nullable();
			$table->string('syarat_tambahan', 255)->nullable();
			$table->double('jumlah_dibutuhkan')->nullable();
			$table->integer('tahunajaran_id')->nullable();
			$table->integer('semester_id')->nullable();
			$table->integer('dosen_id')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tambah_lowongan');
    }
}
