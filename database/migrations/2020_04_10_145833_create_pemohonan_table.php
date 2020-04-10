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
            $table->integer('id_pemohon');
            $table->string('tujuan');
            $table->string('tempat_digunakan');
            $table->date('tarkh_pinjam');
            $table->date('tarkh_pulang');
            $table->integer('id_peralatan');
            $table->integer('status_permohonan');
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
