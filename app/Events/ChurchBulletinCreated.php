<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChurchBulletinCreated extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $bulletin;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(\App\Bulletin $bulletin)
    {
        //
        $this->bulletin = $bulletin;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['church-bulletin-created'];
    }
}
