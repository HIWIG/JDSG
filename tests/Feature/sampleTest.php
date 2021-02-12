<?php

namespace Tests\Feature;

use App\Models\Advert;
use http\Client\Curl\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class sampleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_contact_us_valid_link()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertViewIs('contact');
        $response->assertOk();
    }
    public function test_category_valid_link()
    {
        $response = $this->get('/category');
        $response->assertStatus(302);
        $response->assertRedirect('');
    }



}
