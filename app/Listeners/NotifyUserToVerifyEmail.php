<?php

namespace App\Listeners;

use App\Events\UserLoggedInEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyUserToVerifyEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserLoggedInEvent $event): void
    {
        $user = $event->user;

        if(!$user->hasVerifiedEmail()) {
            session()->flash("email_verification","ایمیل خود را تأیید کنید");
        }
    }
}
