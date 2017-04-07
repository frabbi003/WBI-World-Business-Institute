<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRchSubMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rchsubmenu', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rchmenu_id');
            $table->string('sub_menu_link');
            $table->string('sub_menu_name');
            $table->integer('sub_menu_pos');
            $table->string('sub_menu_img');
            $table->text('sub_menu_headline');
            $table->longText('sub_menu_desc');
            $table->integer('sub_menu_status');
            $table->timestamps();

            $table->foreign('rchmenu_id')->references('id')->on('rchmenu');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rch_sub_menu');
    }
}
