<?php

namespace Tests\Feature;

use App\BigQuestion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function testString(){
        $response=$this->get('/');
        $response->assertSee('東京の難読地名クイズ');
    }
    public function testCreate(){
        $instance=factory(BigQuestion::class)->create();
        $response=$this->get('/');
        $response->assertSee($instance->name);
    }
}
