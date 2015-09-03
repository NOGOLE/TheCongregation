<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\UserAccountCreated' => [
            'App\Listeners\UserAccountCreatedListener',
        ],
        'App\Events\ChurchBulletinCreated' => [
            'App\Listeners\ChurchBulletinCreatedListener',
        ],
        'App\Events\ChurchEventCreated' => [
            'App\Listeners\ChurchEventCreatedListener',
        ],
        'App\Events\ChurchAccountCreated' => [
            'App\Listeners\ChurchEventCreatedListener',
        ],


    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
