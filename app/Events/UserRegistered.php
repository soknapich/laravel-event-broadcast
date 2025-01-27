<?php
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegistered implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;

    /**
     * Create a new event instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new PrivateChannel('registered-user');
    }

    /**
     * Map the data which are going to be sent on the Channel
     *
     * @return array
     */
    public function broadcastWith(): array
    {
        return [
            'name'         => $this->user->name,
            'email'        => $this->user->email,
            'phone_number' => $this->user->phone_number,
        ];
    }

    /**
     * Modify the broadcast event class
     *
     * @return string
     */
    public function broadcastAs(): string
    {
        return 'user-created';
    }
}
