<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegistration implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $name;

    /**
     * Create a new event instance.
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('belajar-puhser-notificatio'),
        ];
    }
/**
 * Broadcast event user registraton.
 *
 * @return void
 */
    public function broadcastAs()
    {
        return 'user-register';
    }
}
