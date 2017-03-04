<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Mail\Mailer;

class SendEmailActivateCode implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    public function __construct( User $user )
    {
        $this->user = $user;
    }


    public function handle( Mailer $mailer )
    {
        $mailer->send('emails.register', array('url' => 'test-url'), function($message)
        {
            $message->to($this->user->email)->subject('Регистрация на drakosha-olimpiada.ru');
        });
    }
}
