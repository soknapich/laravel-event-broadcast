<?php
namespace App\Listeners;

class SendWelcomeEmail
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
    public function handle(): void
    {
        // Mail::to($event->user->email)->send(new WelcomeMail($event->user->name));
    }
}
