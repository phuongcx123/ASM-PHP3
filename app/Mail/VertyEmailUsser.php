<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VertyEmailUsser extends Mailable
{
    use Queueable, SerializesModels;


    public $user ;
    public function __construct($user)
    {

        $this ->user = $user;
    }

   public function build() {
    return $this->view('Client.Auth.mail.very')
    ->with(['user' => $this->user ]);
   }
}
