<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testForm(): void
    {
        $this->view("form", [ "user" => [
            "premium" => true,
            "name" => "Gleam",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("Gleam")
            ->assertDontSee("readonly");

        $this->view("form", [ "user" => [
            "premium" => false,
            "name" => "Gleam",
            "admin" => false
        ]])
            ->assertDontSee("checked")
            ->assertSee("Gleam")
            ->assertSee("readonly");
    }
}
