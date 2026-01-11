<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testSwitch(): void
    {
        $this->view("switch", ["name" => "A"])
            ->assertSeeText("Memuaskan", false);
        $this->view("switch", ["name" => "B"])
            ->assertSeeText("Bagus", false);
        $this->view("switch", ["name" => "C"])
            ->assertSeeText("Cukup", false);
        $this->view("switch", ["name" => "D"])
            ->assertSeeText("Tidak Lulus", false);
    }
}
