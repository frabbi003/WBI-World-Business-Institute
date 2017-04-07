<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRchSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rch_slider', function (Blueprint $table) {
            $table->increments('slider_id');
            $table->string('slider_link');
            $table->text('slider_title');
            $table->string('slider_img');
            $table->string('slider_cover_img');
            $table->longText('slider_desc');
            $table->integer('slider_status');
            $table->integer('slider_position');
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
        Schema::dropIfExists('rch_slider');
    }
}
