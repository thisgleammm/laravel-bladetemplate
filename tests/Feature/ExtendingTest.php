<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExtendingTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testExtending(): void
    {
        $this->view("extending", ['name' => 'Gleam'])
            ->assertSeeText("hello Gleam");
    }
}
