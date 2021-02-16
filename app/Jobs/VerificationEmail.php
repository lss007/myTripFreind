<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use App\Mail\SendVerificationEmail;

class VerificationEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $user;
    protected $verify;

    /**
     * Create a new job instance.
     *
     * @return void
     */
     public function __construct($user, $verify)
     {
        $this->user = $user;
        $this->verify = $verify;
     }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
      $email = new SendVerificationEmail($this->user, $this->verify);
      Mail::to($this->user->email)->send($email);
    }
}
