<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Category;
class JDSGTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $cat = new Category();
        $cat->setTitle('Laptop');

        $this->assertIsNotBool($cat->getTitle());

        $this->assertEquals($cat->getTitle(),'Laptop');

        $this->assertNull(getTitle);

    }
}
