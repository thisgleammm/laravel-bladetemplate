<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testHello(): void
    {
        $this->get('/hello')
            ->assertSeeText('Hello, Laravel');
    }
    public function testHelloWorld(): void
    {
        $this->get('/world')
            ->assertSeeText('Hello, Laravel');
    }
    public function testHelloView(): void
    {
        $this->view('hello', [
            'name' => 'Tes',
        ])
            ->assertSeeText('Hello, Tes');
    }
    public function testHelloWorldView(): void
    {
        $this->view('hello.world', [
            'name' => 'Test',
        ])
            ->assertSeeText('Hello, Test');
    }
}
