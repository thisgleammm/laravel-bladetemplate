<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testFor(): void
    {
        $this->view("for", ["limit" => 10])
            ->assertSeeText("0", false)
            ->assertSeeText("1", false)
            ->assertSeeText("2", false)
            ->assertSeeText("3", false)
            ->assertSeeText("4", false)
            ->assertSeeText("5", false)
            ->assertSeeText("6", false)
            ->assertSeeText("7", false)
            ->assertSeeText("8", false)
            ->assertSeeText("9", false);
    }
    public function testForEach(): void
    {
        $this->view("foreach", ["hobbies" => ["Reading", "Swimming", "Coding"]])
            ->assertSeeText("Reading", false)
            ->assertSeeText("Swimming", false)
            ->assertSeeText("Coding", false);
    }

    public function testForElse()
    {
        $this->view("forelse", ["hobbies" => ["Coding"]])
            ->assertSeeText("Coding", false)
            ->assertDontSeeText("No hobbies", false);

        $this->view("forelse", ["hobbies" => []])
            ->assertSeeText("No hobbies", false)
            ->assertDontSeeText("Coding", false);
    }
}
