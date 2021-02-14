<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreatesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id('id');
            $table->string('title');
        });
        $this->InsertInto();

    }

    public function InsertInto()
    {
        $CATEGORIES = ['Laptop','Monitory','Klawiatury','Słuchawki','Myszki','Telefony','Dyski','Podzespoły Komputerowe','Konsole','Układy Scalone'];

        foreach ($CATEGORIES as $cat)
        {
            DB::table('categories')->insert(['title'=>$cat]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
