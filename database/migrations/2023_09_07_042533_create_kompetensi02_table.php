<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKompetensi02Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kompetensi02', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nama_skema_id');
            $table->foreign('nama_skema_id')->references('id')->on('skema')->onDelete('cascade');
            $table->string('tuk')->nullable();
            $table->string('kode')->nullable();
            $table->string('unit')->nullable();
            $table->longText('element_kuk_1_01')->nullable();
            $table->longText('element_kuk_1_02')->nullable();
            $table->longText('element_kuk_1_03')->nullable();
            $table->longText('element_kuk_1_04')->nullable();
            $table->longText('element_kuk_1_05')->nullable();
            $table->longText('element_kuk_1_06')->nullable();
            $table->longText('element_kuk_1_07')->nullable();
            $table->longText('element_kuk_1_08')->nullable();
            $table->longText('element_kuk_1_09')->nullable();
            $table->longText('element_kuk_1_10')->nullable();
            $table->longText('element_kuk_1_11')->nullable();

            $table->string('kode2')->nullable();
            $table->string('unit2')->nullable();
            $table->longText('element_kuk_2_01')->nullable();
            $table->longText('element_kuk_2_02')->nullable();
            $table->longText('element_kuk_2_03')->nullable();
            $table->longText('element_kuk_2_04')->nullable();
            $table->longText('element_kuk_2_05')->nullable();
            $table->longText('element_kuk_2_06')->nullable();
            $table->longText('element_kuk_2_07')->nullable();
            $table->longText('element_kuk_2_08')->nullable();
            $table->longText('element_kuk_2_09')->nullable();
            $table->longText('element_kuk_2_10')->nullable();
            $table->longText('element_kuk_2_11')->nullable();

            $table->string('kode3')->nullable();
            $table->string('unit3')->nullable();
            $table->longText('element_kuk_3_01')->nullable();
            $table->longText('element_kuk_3_02')->nullable();
            $table->longText('element_kuk_3_03')->nullable();
            $table->longText('element_kuk_3_04')->nullable();
            $table->longText('element_kuk_3_05')->nullable();
            $table->longText('element_kuk_3_06')->nullable();
            $table->longText('element_kuk_3_07')->nullable();
            $table->longText('element_kuk_3_08')->nullable();
            $table->longText('element_kuk_3_09')->nullable();
            $table->longText('element_kuk_3_10')->nullable();
            $table->longText('element_kuk_3_11')->nullable();

            $table->string('kode4')->nullable();
            $table->string('unit4')->nullable();
            $table->longText('element_kuk_4_01')->nullable();
            $table->longText('element_kuk_4_02')->nullable();
            $table->longText('element_kuk_4_03')->nullable();
            $table->longText('element_kuk_4_04')->nullable();
            $table->longText('element_kuk_4_05')->nullable();
            $table->longText('element_kuk_4_06')->nullable();
            $table->longText('element_kuk_4_07')->nullable();
            $table->longText('element_kuk_4_08')->nullable();
            $table->longText('element_kuk_4_09')->nullable();
            $table->longText('element_kuk_4_10')->nullable();
            $table->longText('element_kuk_4_11')->nullable();

            $table->string('kode5')->nullable();
            $table->string('unit5')->nullable();
            $table->longText('element_kuk_5_01')->nullable();
            $table->longText('element_kuk_5_02')->nullable();
            $table->longText('element_kuk_5_03')->nullable();
            $table->longText('element_kuk_5_04')->nullable();
            $table->longText('element_kuk_5_05')->nullable();
            $table->longText('element_kuk_5_06')->nullable();
            $table->longText('element_kuk_5_07')->nullable();
            $table->longText('element_kuk_5_08')->nullable();
            $table->longText('element_kuk_5_09')->nullable();
            $table->longText('element_kuk_5_10')->nullable();
            $table->longText('element_kuk_5_11')->nullable();

            $table->string('kode6')->nullable();
            $table->string('unit6')->nullable();
            $table->longText('element_kuk_6_01')->nullable();
            $table->longText('element_kuk_6_02')->nullable();
            $table->longText('element_kuk_6_03')->nullable();
            $table->longText('element_kuk_6_04')->nullable();
            $table->longText('element_kuk_6_05')->nullable();
            $table->longText('element_kuk_6_06')->nullable();
            $table->longText('element_kuk_6_07')->nullable();
            $table->longText('element_kuk_6_08')->nullable();
            $table->longText('element_kuk_6_09')->nullable();
            $table->longText('element_kuk_6_10')->nullable();
            $table->longText('element_kuk_6_11')->nullable();


            $table->string('kode7')->nullable();
            $table->string('unit7')->nullable();
            $table->longText('element_kuk_7_01')->nullable();
            $table->longText('element_kuk_7_02')->nullable();
            $table->longText('element_kuk_7_03')->nullable();
            $table->longText('element_kuk_7_04')->nullable();
            $table->longText('element_kuk_7_05')->nullable();
            $table->longText('element_kuk_7_06')->nullable();
            $table->longText('element_kuk_7_07')->nullable();
            $table->longText('element_kuk_7_08')->nullable();
            $table->longText('element_kuk_7_09')->nullable();
            $table->longText('element_kuk_7_10')->nullable();
            $table->longText('element_kuk_7_11')->nullable();


            $table->string('kode8')->nullable();
            $table->string('unit8')->nullable();
            $table->longText('element_kuk_8_01')->nullable();
            $table->longText('element_kuk_8_02')->nullable();
            $table->longText('element_kuk_8_03')->nullable();
            $table->longText('element_kuk_8_04')->nullable();
            $table->longText('element_kuk_8_05')->nullable();
            $table->longText('element_kuk_8_06')->nullable();
            $table->longText('element_kuk_8_07')->nullable();
            $table->longText('element_kuk_8_08')->nullable();
            $table->longText('element_kuk_8_09')->nullable();
            $table->longText('element_kuk_8_10')->nullable();
            $table->longText('element_kuk_8_11')->nullable();


            $table->string('kode9')->nullable();
            $table->string('unit9')->nullable();
            $table->longText('element_kuk_9_01')->nullable();
            $table->longText('element_kuk_9_02')->nullable();
            $table->longText('element_kuk_9_03')->nullable();
            $table->longText('element_kuk_9_04')->nullable();
            $table->longText('element_kuk_9_05')->nullable();
            $table->longText('element_kuk_9_06')->nullable();
            $table->longText('element_kuk_9_07')->nullable();
            $table->longText('element_kuk_9_08')->nullable();
            $table->longText('element_kuk_9_09')->nullable();
            $table->longText('element_kuk_9_10')->nullable();
            $table->longText('element_kuk_9_11')->nullable();


            $table->string('kode10')->nullable();
            $table->string('unit10')->nullable();
            $table->longText('element_kuk_10_01')->nullable();
            $table->longText('element_kuk_10_02')->nullable();
            $table->longText('element_kuk_10_03')->nullable();
            $table->longText('element_kuk_10_04')->nullable();
            $table->longText('element_kuk_10_05')->nullable();
            $table->longText('element_kuk_10_06')->nullable();
            $table->longText('element_kuk_10_07')->nullable();
            $table->longText('element_kuk_10_08')->nullable();
            $table->longText('element_kuk_10_09')->nullable();
            $table->longText('element_kuk_10_10')->nullable();
            $table->longText('element_kuk_10_11')->nullable();

            $table->string('kode11')->nullable();
            $table->string('unit11')->nullable();
            $table->longText('element_kuk_11_01')->nullable();
            $table->longText('element_kuk_11_02')->nullable();
            $table->longText('element_kuk_11_03')->nullable();
            $table->longText('element_kuk_11_04')->nullable();
            $table->longText('element_kuk_11_05')->nullable();
            $table->longText('element_kuk_11_06')->nullable();
            $table->longText('element_kuk_11_07')->nullable();
            $table->longText('element_kuk_11_08')->nullable();
            $table->longText('element_kuk_11_09')->nullable();
            $table->longText('element_kuk_11_10')->nullable();
            $table->longText('element_kuk_11_11')->nullable();
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
        Schema::dropIfExists('kompetensi02');
    }
}