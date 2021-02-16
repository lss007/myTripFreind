<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendVerificationEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $user;
    protected $verify;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($user, $verify)
     {
         $this->user = $user;
         $this->verify = $verify;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.verify_account')->with([
          'user_email' => $this->user->email,
          'email_token' => $this->verify->emailcode
        ]);
    }
}
