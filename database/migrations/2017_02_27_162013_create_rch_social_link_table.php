<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRchSocialLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rch_social_link', function (Blueprint $table) {
            $table->increments('social_id');
            $table->string('social_name');
            $table->string('social_link');
            $table->string('social_icon_class');
            $table->integer('social_icon_pos');
            $table->integer('social_status');
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
        Schema::dropIfExists('rch_social_link');
    }
}
