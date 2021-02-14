<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_UserFirstName()
    {
        $user = new User();

        $user->setFirstName('Johnny');

        $this->assertEquals($user->getFirstName(),'Johnny');

    }
}
