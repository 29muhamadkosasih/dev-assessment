<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApl02Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apl02', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kompetensi02_id');
            $table->foreign('kompetensi02_id')->references('id')->on('kompetensi02')->onDelete('cascade');
            $table->unsignedBigInteger('apl01_id');
            $table->foreign('apl01_id')->references('id')->on('personal_detail')->onDelete('cascade');
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
        Schema::dropIfExists('apl02');
    }
}