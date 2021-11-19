<?php

namespace Tests\Feature\Auth;

use App\Models\Account;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class EmailVerificationTest extends TestCase
{
  use RefreshDatabase;

  public function test_email_verification_screen_can_be_rendered()
  {
    $account = Account::factory()->create([
      'email_verified_at' => null,
    ]);

    $response = $this->actingAs($account)->get('/verify-email');

    $response->assertStatus(200);
  }

  public function test_email_can_be_verified()
  {
    $account = Account::factory()->create([
      'email_verified_at' => null,
    ]);

    Event::fake();

    $verificationUrl = URL::temporarySignedRoute(
      'verification.verify',
      now()->addMinutes(60),
      ['id' => $account->id, 'hash' => sha1($account->email)]
    );

    $response = $this->actingAs($account)->get($verificationUrl);

    Event::assertDispatched(Verified::class);
    $this->assertTrue($account->fresh()->hasVerifiedEmail());
    $response->assertRedirect(RouteServiceProvider::HOME . '?verified=1');
  }

  public function test_email_is_not_verified_with_invalid_hash()
  {
    $account = Account::factory()->create([
      'email_verified_at' => null,
    ]);

    $verificationUrl = URL::temporarySignedRoute(
      'verification.verify',
      now()->addMinutes(60),
      ['id' => $account->id, 'hash' => sha1('wrong-email')]
    );

    $this->actingAs($account)->get($verificationUrl);

    $this->assertFalse($account->fresh()->hasVerifiedEmail());
  }
}
