<?php

namespace Tests\Feature;

use App\Models\Form;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class FormTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     */
    public function test_create_form(): void
    {
        $response  = $this->post('/api/v1/save', [
            'name' => 'test name',
            'message' => 'test message',
        ], [
            'Accept' => 'application/json',
        ]);
        $response->assertStatus(200);

        $forms = Form::all();
        $this->assertEquals(1, $forms->count());
        $form = $forms->first();
        $this->assertEquals('test name', $form->name);
        $this->assertEquals('test message', $form->message);
    }

    public function test_validate_form_name(): void
    {
        $response  = $this->post('/api/v1/save', [
            'name' => null,
            'message' => 'test message',
        ], [
            'Accept' => 'application/json',
        ]);
        $response->assertStatus(422);
        $response->assertJsonStructure([
            'message',
            'errors' => [
                'name',
            ]
        ]);
    }

    public function test_validate_form_message(): void
    {
        $response  = $this->post('/api/v1/save', [
            'name' => "test",
            'message' => null,
        ], [
            'Accept' => 'application/json',
        ]);
        $response->assertStatus(422);
        $response->assertJsonStructure([
            'message',
            'errors' => [
                'message',
            ]
        ]);
    }
}
