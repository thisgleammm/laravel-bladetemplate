<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testClass(): void
    {
        $this->view('class', [
            'hobbies' => [
                ['name' => 'Reading', 'love' => true],
                ['name' => 'Coding', 'love' => false],
                ['name' => 'Gaming', 'love' => true],
            ],
        ])
            ->assertSee('<li class="red bold">Reading</li>', false)
            ->assertSee('<li class="red">Coding</li>', false)
            ->assertSee('<li class="red bold">Gaming</li>', false);
    }
}
