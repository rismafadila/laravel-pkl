<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_data')->unsigned();
            $table->string('nama');
            $table->string('telp');
            $table->bigInteger('stok');
            $table->date('tgl_pinjam');
            $table->boolean('status')->default(0);

            $table->foreign('id_data')->references('id')
            ->on('databarangs')->onUpdate('cascade')
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
        Schema::dropIfExists('pinjams');
    }
}
