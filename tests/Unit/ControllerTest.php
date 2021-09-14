<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Controller;

class ControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_getCategories_return_array()
    {
        $testController = new Controller();
        $categories = $testController->getCategories();

        $this->assertIsArray($categories);
    }
}
