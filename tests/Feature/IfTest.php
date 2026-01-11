<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testIf(): void
    {
        $this->view("if", [
            "hobies" => []
        ])->assertSeeText("i don't have any hobies", false);
        $this->view("if", [
            "hobies" => ["reading"]
        ])->assertSeeText("i have one hobie");
        $this->view("if", [
            "hobies" => ["reading", "traveling", "gaming"]
        ])->assertSeeText("i have multiple hobies");
    }
}
