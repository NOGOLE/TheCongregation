<?php

namespace App\Listeners;

use App\Events\ChurchAccountCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChurchBulletinCreatedListener
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
     * @param  ChurchBulletinCreated  $event
     * @return void
     */
    public function handle(ChurchAccountCreated $event)
    {
        //
    }
}
