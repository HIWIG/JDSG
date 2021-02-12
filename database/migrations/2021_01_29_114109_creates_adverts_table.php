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
                $table->id();

                $table->bigInteger('categoryId')->unsigned();
               $table->foreign('categoryId')->references('id')->on('categories');

                $table->bigInteger('userId')->unsigned();
                $table->foreign('userId')->references('id')->on('users');

                $table->string('image');
                $table->string('title');
                $table->string('description');
                $table->decimal('cost', 9, 2);
                $table->timestamps();

                $table->bigInteger('phone');
                $table->string('city');



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
