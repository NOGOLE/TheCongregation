<?php

namespace App\Listeners;

use App\Events\UserAccountCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserAccountCreatedListener
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
     * @param  UserAccountCreated  $event
     * @return void
     */
    public function handle(UserAccountCreated $event)
    {
        //
    }
}
