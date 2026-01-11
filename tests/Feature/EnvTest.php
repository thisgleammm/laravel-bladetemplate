<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testEnv(): void
    {
        $this->view("env", [])
            ->assertSeeText("I'm in testing", false);
    }
}
