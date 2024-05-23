<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class FeedbackControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function store()
    {
        $token = 'gaCSc0IKz3b0KLGvMzxjqD7izjRWBfsFkOLmxgBrS7MssD2j7RUqdUTAA25HcrY9';

        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'city' => 'New York',
            'subject' => 'Test Subject',
            'message' => 'Test message',
            'file' => UploadedFile::fake()->create('test.jpg', 100)
        ];

        $response = $this->withHeaders([
            'Authorization' => $token,
        ])->json('POST', '/api/feedback', $data);

        $response->assertStatus(201)
            ->assertJson([
                'message' => 'Feedback submitted successfully',
                'data' => [
                    'headers' => [],
                    'original' => [
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'phone' => $data['phone'],
                        'city' => $data['city'],
                        'subject' => $data['subject'],
                        'message' => $data['message'],
                    ],
                    'exception' => null,
                ]
            ]);
    }
}
