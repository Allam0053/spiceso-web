<?php

namespace Tests\Feature\Auth;

use App\Models\Account;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PasswordConfirmationTest extends TestCase
{
  use RefreshDatabase;

  public function test_confirm_password_screen_can_be_rendered()
  {
    $account = Account::factory()->create();

    $response = $this->actingAs($account)->get('/confirm-password');

    $response->assertStatus(200);
  }

  public function test_password_can_be_confirmed()
  {
    $account = Account::factory()->create();

    $response = $this->actingAs($account)->post('/confirm-password', [
      'password' => 'password',
    ]);

    $response->assertRedirect();
    $response->assertSessionHasNoErrors();
  }

  public function test_password_is_not_confirmed_with_invalid_password()
  {
    $account = Account::factory()->create();

    $response = $this->actingAs($account)->post('/confirm-password', [
      'password' => 'wrong-password',
    ]);

    $response->assertSessionHasErrors();
  }
}
