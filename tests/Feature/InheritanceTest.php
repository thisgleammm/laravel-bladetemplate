<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testInheritance(): void
    {
        $this->view("child", [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Deskripsi Header")
            ->assertSeeText("Ini adalah halaman utama");
    }
    
    public function testInheritanceWithoutOverride(): void
    {
        $this->view("child-default", [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Default Content")
            ->assertDontSeeText("Deskripsi Header")
            ->assertDontSeeText("Ini adalah halaman utama");
    }
}
