<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone');
            $table->string('email');
            $table->string('location');
            $table->integer('logo_id')->nullable()->unsigned();
            $table->foreign('logo_id')->references('id')->on('images')->onDelete('cascade');
            $table->string('YouTube');
            $table->string('Instegram');
            $table->string('Twitter');
            $table->string('Facebook');
            $table->text('contact_us');
            $table->text('contact_us_ar');
            $table->text('footer_text');
            $table->text('footer_text_ar');
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
        Schema::dropIfExists('settings');
    }
}
