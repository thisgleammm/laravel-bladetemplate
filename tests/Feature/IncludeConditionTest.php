<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testIncludeCondition(): void
    {
        $this->view("include-condition", [
            "user" => [
                "name" => "Gleam",
                "owner" => true
            ]
        ])
            ->assertSeeText("Selamat Datang Gleam")
            ->assertSeeText("Silahkan Buka Menu Laporan");

        $this->view("include-condition", [
            "user" => [
                "name" => "Gleam",
                "owner" => false
            ]
        ])
            ->assertSeeText("Selamat Datang Gleam")
            ->assertDontSeeText("Silahkan Buka Menu Laporan");
    }
}
