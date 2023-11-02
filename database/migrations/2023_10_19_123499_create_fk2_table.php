<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFk2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fk2', function (Blueprint $table) {
            $table->id();
            $table->longText('tgl_mulai')->nullable();
            $table->longText('tgl_selesai')->nullable();
            $table->longText('result')->nullable();
            $table->longText('tindak_lanjut')->nullable();
            $table->longText('bk_tindak_lanjut')->nullable();
            $table->longText('comment')->nullable();
            $table->longText('bk_comment')->nullable();
            $table->longText('status')->nullable();
            $table->longText('unit_kom1_1')->nullable();
            $table->longText('unit_kom1_2')->nullable();
            $table->longText('unit_kom1_3')->nullable();
            $table->longText('unit_kom1_4')->nullable();
            $table->longText('unit_kom1_5')->nullable();
            $table->longText('unit_kom1_6')->nullable();
            $table->longText('unit_kom1_7')->nullable();

            $table->longText('unit_kom2_1')->nullable();
            $table->longText('unit_kom2_2')->nullable();
            $table->longText('unit_kom2_3')->nullable();
            $table->longText('unit_kom2_4')->nullable();
            $table->longText('unit_kom2_5')->nullable();
            $table->longText('unit_kom2_6')->nullable();
            $table->longText('unit_kom2_7')->nullable();

            $table->longText('unit_kom3_1')->nullable();
            $table->longText('unit_kom3_2')->nullable();
            $table->longText('unit_kom3_3')->nullable();
            $table->longText('unit_kom3_4')->nullable();
            $table->longText('unit_kom3_5')->nullable();
            $table->longText('unit_kom3_6')->nullable();
            $table->longText('unit_kom3_7')->nullable();

            $table->longText('unit_kom4_1')->nullable();
            $table->longText('unit_kom4_2')->nullable();
            $table->longText('unit_kom4_3')->nullable();
            $table->longText('unit_kom4_4')->nullable();
            $table->longText('unit_kom4_5')->nullable();
            $table->longText('unit_kom4_6')->nullable();
            $table->longText('unit_kom4_7')->nullable();

            $table->longText('unit_kom5_1')->nullable();
            $table->longText('unit_kom5_2')->nullable();
            $table->longText('unit_kom5_3')->nullable();
            $table->longText('unit_kom5_4')->nullable();
            $table->longText('unit_kom5_5')->nullable();
            $table->longText('unit_kom5_6')->nullable();
            $table->longText('unit_kom5_7')->nullable();

            $table->longText('unit_kom6_1')->nullable();
            $table->longText('unit_kom6_2')->nullable();
            $table->longText('unit_kom6_3')->nullable();
            $table->longText('unit_kom6_4')->nullable();
            $table->longText('unit_kom6_5')->nullable();
            $table->longText('unit_kom6_6')->nullable();
            $table->longText('unit_kom6_7')->nullable();

            $table->longText('unit_kom7_1')->nullable();
            $table->longText('unit_kom7_2')->nullable();
            $table->longText('unit_kom7_3')->nullable();
            $table->longText('unit_kom7_4')->nullable();
            $table->longText('unit_kom7_5')->nullable();
            $table->longText('unit_kom7_6')->nullable();
            $table->longText('unit_kom7_7')->nullable();

            $table->longText('unit_kom8_1')->nullable();
            $table->longText('unit_kom8_2')->nullable();
            $table->longText('unit_kom8_3')->nullable();
            $table->longText('unit_kom8_4')->nullable();
            $table->longText('unit_kom8_5')->nullable();
            $table->longText('unit_kom8_6')->nullable();
            $table->longText('unit_kom8_7')->nullable();

            $table->longText('unit_kom9_1')->nullable();
            $table->longText('unit_kom9_2')->nullable();
            $table->longText('unit_kom9_3')->nullable();
            $table->longText('unit_kom9_4')->nullable();
            $table->longText('unit_kom9_5')->nullable();
            $table->longText('unit_kom9_6')->nullable();
            $table->longText('unit_kom9_7')->nullable();

            $table->longText('unit_kom10_1')->nullable();
            $table->longText('unit_kom10_2')->nullable();
            $table->longText('unit_kom10_3')->nullable();
            $table->longText('unit_kom10_4')->nullable();
            $table->longText('unit_kom10_5')->nullable();
            $table->longText('unit_kom10_6')->nullable();
            $table->longText('unit_kom10_7')->nullable();

            $table->longText('unit_kom11_1')->nullable();
            $table->longText('unit_kom11_2')->nullable();
            $table->longText('unit_kom11_3')->nullable();
            $table->longText('unit_kom11_4')->nullable();
            $table->longText('unit_kom11_5')->nullable();
            $table->longText('unit_kom11_6')->nullable();
            $table->longText('unit_kom11_7')->nullable();


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
        Schema::dropIfExists('fk2');
    }
}
