<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChurchEventCreated extends Event implements ShouldBroadcast
{
    use SerializesModels;
    public $event;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(\App\Event $event)
    {
        //
        $this->event = $event;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['event-created'];
    }
}
