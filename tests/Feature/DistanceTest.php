<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\DistanceController;
use Tests\TestCase;

class DistanceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test404()
    {
        $response = $this->get('/');

        $response->assertStatus(404);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test200()
    {
        $response = $this->get('/distances');

        $response->assertStatus(200);
    }

     /**
     * A HTML is showing
     *
     * @return void
     */
    public function testCheckHTMLrendering()
    {
        $response = $this->get('/distances');

        $response->assertSee("Distances less than 100km in affilates.txt");
    }

     /**
     * Test Great Circle Distance is correct
     *
     * @return void
     */
    public function testEqual()
    {
        $controller = new DistanceController();
        $this->assertEquals(41, round($controller->calculateDistance("52.986375", "-6.043701", "53.3340285", "-6.2535495")));
    }

     /**
     * Test Great Circle distance is empty
     *
     * @return void
     */
    public function testDistanceFalse()
    {
        $controller = new DistanceController();
        $this->assertFalse($controller->calculateDistance("", "-6.043701", "53.3340285", "-6.2535495"));
    }
}