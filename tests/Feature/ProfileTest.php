<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    use RefreshDatabase; // Clean database state

    public function test_profile_page_is_displayed(): void
    {
        // ARRANGE
        $user = User::factory()->create(); // Create user from factory 

        // ACT
        $response = $this
            ->actingAs($user)
            ->get('/profile');

        // ASSERT
        $response->assertOk(); // returns HTTP 200 status code
    }

    public function test_profile_information_can_be_updated(): void
    {
        // ARRANGE
        $user = User::factory()->create();

        // ACT
        $response = $this
            ->actingAs($user)
            ->patch('/profile', [ // HTTP method
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $user->refresh(); // ensures that the model contains the latest data from the database by refetching data

        // ASSERT
        $this->assertSame('Test User', $user->name);
        $this->assertSame('test@example.com', $user->email);
        $this->assertNull($user->email_verified_at); // Email should be unverified after registration
    }

    public function test_email_verification_status_is_unchanged_when_the_email_address_is_unchanged(): void
    {
        // ARRANGE
        $user = User::factory()->create();

        // ACT
        $response = $this
            ->actingAs($user)
            ->patch('/profile', [
                'name' => 'Test User',
                'email' => $user->email,
            ]);

        // ASSERT
        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/profile');

        $this->assertNotNull($user->refresh()->email_verified_at);
    }

    public function test_user_can_delete_their_account(): void
    {
        // ARRANGE
        $user = User::factory()->create();

        // ACT
        $response = $this
            ->actingAs($user)
            ->delete('/profile', [
                'password' => 'password',
            ]);
        
        // ASSERT

        $response
            ->assertSessionHasNoErrors()
            ->assertRedirect('/');

        // checks whether the current user is unauthenticated, commonly used to confirm that no user is logged in or authenticated.
        $this->assertGuest();
        $this->assertNull($user->fresh());
    }

    public function test_correct_password_must_be_provided_to_delete_account(): void
    {
        // ARRANGE
        $user = User::factory()->create();

        // ACT
        $response = $this
            ->actingAs($user)
            ->from('/profile')
            ->delete('/profile', [
                'password' => 'wrong-password',
            ]);

        // ASSERT
        $response
            ->assertSessionHasErrorsIn('userDeletion', 'password')
            ->assertRedirect('/profile');

        $this->assertNotNull($user->fresh());
    }
}
