<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<class-string, array<int, class-string>>
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        parent::boot();

=======
>>>>>>> d2e81559bed91cfa69aa5464e60e1f2dd25bebf8
        //
    }
}
