<?php

namespace Tests\Unit;

use App\Models\Advert;
use PHPUnit\Framework\TestCase;

class AdTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_AdCost()
    {
        $ad = new Advert();

        $ad->setCost('123');

        $this->assertEquals($ad->getCost(),'123');

        $this->assertIsNumeric($ad->getCost());

        $ad->setCost('ABC');

        $this->assertIsNotNumeric($ad->getCost());
    }
}
