<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testIssetAndEmpty(): void
    {
        $this->view("issetempty", [])
        ->assertDontSeeText("Hello, gleam")
        ->assertSeeText("I don't have any hobbies.", false);

        $this->view("issetempty", [
            "name" => "gleam"
        ])->assertSeeText("Hello, gleam", false)
        ->assertSeeText("I don't have any hobbies.", false);

        $this->view("issetempty", [
            "name" => "gleam",
            "hobbies" => "Golf"
        ])->assertSeeText("Hello, gleam", false)
        ->assertDontSeeText("I don't have any hobbies.", false);
    }
}
