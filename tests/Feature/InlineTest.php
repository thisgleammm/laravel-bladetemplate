<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testInline(): void
    {
        $response = Blade::render('Hello {{ $name }}', ['name' => 'Gleam']);
        self::assertEquals("Hello Gleam", $response);
    }
}
