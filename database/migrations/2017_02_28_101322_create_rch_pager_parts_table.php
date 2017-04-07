<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRchPagerPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rch_pager_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('rchsection_id');
            $table->string('link');
            $table->integer('status');
            $table->integer('position');
            $table->string('img');
            $table->text('title');
            $table->text('headline');
            $table->longText('description');
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
        Schema::dropIfExists('rch_pager_parts');
    }
}
