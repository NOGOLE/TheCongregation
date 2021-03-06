<?php

namespace App\Listeners;

use App\Events\UserAccountCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;

class UserAccountCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */

     private $mailer;
    public function __construct(Mailer $mailer)
    {
        //
        $this->mailer = $mailer;
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
