<?php

namespace App\CustomFacade;

use Illuminate\Support\Facades\Mail;

class MailFacade
{
  public static function mailPostRegister($targetMail, $targetName)
  {
    Mail::send('emails.postreg', [$targetName], function ($message) use ($targetName, $targetMail) {
      $message->to($targetName, $targetMail)
        ->subject("Selamat Datang di Spiceso App");

      $message->from("mailer@spiceso.com", "Spiceso.com");
    });
  }
}
