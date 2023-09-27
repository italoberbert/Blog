<?php

namespace App\Listeners;

use App\Events\CreatedUser;
use App\Mail\UserCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SendEmailCreatedUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()   
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CreatedUser  $event
     * @return void
     */
    public function handle(CreatedUser $event)
    {
        Log::info("Email enviado para {$event->user['firstName']}");
        Mail::to($event->user['email'])->send(new UserCreated($event->user));
    }
}
