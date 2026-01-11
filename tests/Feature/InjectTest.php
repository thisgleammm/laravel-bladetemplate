<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InjectTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testInject(): void
    {
        $this->view('service-injection', ['name' => 'Gleam'])
            ->assertSee('Hello Gleam');
    }
}
