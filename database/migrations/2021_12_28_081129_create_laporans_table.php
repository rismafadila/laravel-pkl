<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pinjem')->unsigned();
            $table->bigInteger('id_data')->unsigned();
            $table->bigInteger('id_kembali')->unsigned();
            $table->string('jurusan');
            $table->foreign('id_data')->references('id')
            ->on('databarangs')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_pinjem')->references('id')
            ->on('pinjams')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('id_kembali')->references('id')
            ->on('pengembalians')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('laporans');
    }
}
