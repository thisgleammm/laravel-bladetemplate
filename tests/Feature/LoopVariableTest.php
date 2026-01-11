<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariableTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testLoopVariable(): void
    {
        $this->view("loop", ["hobbies" => ["Reading", "Swimming", "Coding"]])
            ->assertSeeText("1 . Reading")
            ->assertSeeText("2 . Swimming")
            ->assertSeeText("3 . Coding");
    }
}
