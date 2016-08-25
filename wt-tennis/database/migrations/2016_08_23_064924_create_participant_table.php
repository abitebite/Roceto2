<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_tim');
            $table->string('nama_kapten');
            $table->string('no_hp');
            $table->string('warna_kostum');
            $table->string('jumlah_pemain');
            $table->string('atas_nama');
            $table->string('no_rek');
            $table->string('nama_bank');
            $table->text('bukti');
            $table->string('status');
            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::drop('participants');
    }
}