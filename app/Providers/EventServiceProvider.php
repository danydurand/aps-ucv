<?php

namespace App\Providers;

use App\Models\Asignature;
use App\Models\Objective;
use App\Models\Period;
use App\Models\Planning;
use App\Observers\AsignatureObserver;
use App\Observers\ObjectiveObserver;
use App\Observers\PeriodObserver;
use App\Observers\PlanningObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        Period::observe(PeriodObserver::class);
        Objective::observe(ObjectiveObserver::class);
        Asignature::observe(AsignatureObserver::class);
        // Planning::observe(PlanningObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
