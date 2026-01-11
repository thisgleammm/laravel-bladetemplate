<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RawTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testRaw(): void
    {
        $this->view("raw")
            ->assertSeeText("Gleam")
            ->assertSeeText("20");
    }
}
