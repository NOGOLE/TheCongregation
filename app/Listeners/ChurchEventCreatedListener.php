<?php

namespace App\Listeners;

use App\Events\ChurchEventCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChurchEventCreatedListener
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
     * @param  ChurchEventCreated  $event
     * @return void
     */
    public function handle(ChurchEventCreated $event)
    {
        //
    }
}
