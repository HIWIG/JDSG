<?php

namespace Tests\Unit;

use Tests\TestCase;
use app\Http\Controllers\CategoryController;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_CategoriesCheckInside()
    {
        $this->assertDatabaseHas('categories',[
            'title'=>'Laptopy'
            ]);
    }

    public function test_CategoriesCheckCount()
    {
        $this->assertDatabaseCount('categories',10);
    }

}
