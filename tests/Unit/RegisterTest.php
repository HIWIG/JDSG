<?php

namespace Tests\Unit;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegister()
    {

        $data = [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'username' => $this->faker->userName,
            'email' => $this->faker->email,
            'password' => $this->faker->password(8, 30),
        ];
        $data['password_confirmation'] = $data['password'];

        $response = $this->from(route('register'))
            ->post(route('register'), $data);

        $response->assertSessionHasNoErrors();

        $response->assertRedirect(route('dashboard'));
        // BARDZO SMIALE POSUNIECIE:
        $lastUser = User::query()->latest('id')->first();

        foreach ($data as $index => $value) //tego nie wiedzialem lol
        {
            if ($index === 'password_confirmation') {
                continue;
            }
            if ($index === 'password') {
                self::assertTrue(Hash::check($data[$index], $lastUser->password));
                continue;
            }
            self::assertSame($data[$index], $lastUser->{$index});
        }
    }
}
