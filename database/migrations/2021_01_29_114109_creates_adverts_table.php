<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts',
            function (Blueprint $table) {
                $table->id('idAdvertisement');
                $table->integer('idCategory');
                $table->bigInteger('userId')->unsigned();
                $table->foreign('userId')->references('id')->on('users');
                $table->string('title');
                $table->string('description');
                $table->decimal('cost', 9, 2);
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
        Schema::dropIfExists('adverts');
    }
}
