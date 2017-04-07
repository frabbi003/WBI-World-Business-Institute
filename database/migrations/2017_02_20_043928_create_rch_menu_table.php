<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRchMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rchmenu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menu_link');
            $table->string('menu_name');
            $table->integer('menu_pos');
            $table->string('menu_img');
            $table->text('menu_headline');
            $table->longText('menu_desc');
            $table->integer('menu_status');
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
        Schema::dropIfExists('rch_menu');
    }
}
