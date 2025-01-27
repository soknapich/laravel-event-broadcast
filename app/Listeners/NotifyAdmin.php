<?php
namespace App\Listeners;

class NotifyAdmin
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
        // Notify Admin User
        // $admins = User::where('user_type', 'admin')->get();

        // Notification::send($admins, new NewUserNotification($event->user));
    }
}
