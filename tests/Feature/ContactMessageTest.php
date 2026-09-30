<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactMessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_allows_blank_message(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Louisse',
            'email' => 'louisse@example.com',
            'message' => '',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success', "Thanks for reaching out. I'll get back to you soon.");
        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Louisse',
            'email' => 'louisse@example.com',
        ]);
        $this->assertTrue(ContactMessage::first()->message === null || ContactMessage::first()->message === '');
    }
}
