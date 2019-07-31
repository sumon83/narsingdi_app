<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
<<<<<<< HEAD
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
=======
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
<<<<<<< HEAD
        Registered::class => [
            SendEmailVerificationNotification::class,
=======
        'App\Events\Event' => [
            'App\Listeners\EventListener',
>>>>>>> 475aa789a66f4b546a1ea6f91672658dc27758bf
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
