<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisabledTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testDisabled(): void
    {
        $this->view("disabled", [
            'name' => "Gua"
        ])->assertDontSeeText("Gua")
        ->assertSeeText('Hello {{ $name }}');
    }
}
