<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('video')->nullable();
            $table->string('name');
            $table->string('name_ar');
            $table->text('desc');
            $table->text('desc_ar');
            $table->string('info_1');
            $table->string('info_2');
            $table->string('info_3');
            $table->string('info_4');
            $table->string('info_5');
            $table->string('info_1_ar');
            $table->string('info_2_ar');
            $table->string('info_3_ar');
            $table->string('info_4_ar');
            $table->string('info_5_ar');
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
        Schema::dropIfExists('videos');
    }
}
