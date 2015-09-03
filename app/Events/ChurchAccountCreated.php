<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChurchAccountCreated extends Event implements ShouldBroadcast
{
    use SerializesModels;
    public $church;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(\App\Church $church)
    {
        //
        $this->church = $church;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['church-created'];
    }
}
