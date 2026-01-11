<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnlessTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testUnless(): void
    {
        $this->view("unless", [
            "isAdmin" => true
        ])->assertDontSeeText("You're Not Admin", false);
        $this->view("unless", [
            "isAdmin" => false
        ])->assertSeeText("You're Not Admin", false);
    }
}
