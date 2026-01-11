<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testEach(): void
    {
        $this->view('each', [
            'users' => [
                ['name' => 'Gleam', 'hobbies' => ['Reading', 'Swimming']],
                ['name' => 'Budi', 'hobbies' => ['Painting', 'Coding']],
            ],
        ])
            ->assertSeeInOrder([
                '.red',
                'Gleam',
                'Reading',
                'Swimming',
                'Budi',
                'Painting',
                'Coding',
            ]);
    }
}
