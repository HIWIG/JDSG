<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesTagconnectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagconnections', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('advertisementId')->unsigned();
            $table->foreign('advertisementId')->references('id')->on('adverts');

            $table->bigInteger('tagId')->unsigned();
            $table->foreign('tagId')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagconnections');
    }
}
