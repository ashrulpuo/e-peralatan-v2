<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemohonanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemohonan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jawatan');
            $table->string('bahagian');
            $table->string('tujuan');
            $table->string('tempat_digunakan');
            $table->integer('status_permohonan');
            $table->string('id_permohonan');
            $table->string('nama_pemulang');
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
        Schema::dropIfExists('pemohonan');
    }
}
