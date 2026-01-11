<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testLayout(): void
    {
        $this->view("include", [])
            ->assertSeeText("Default Title")
            ->assertSeeText("Welcome Home")
            ->assertSeeText("selamat datang");

        $this->view("include", [
            "title" => "Home",
        ])
            ->assertSeeText("Home")
            ->assertSeeText("Welcome Home")
            ->assertSeeText("selamat datang");
    }
}
