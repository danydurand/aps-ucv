<?php

namespace App\Observers;

use App\Models\Period;
use App\Models\Planning;

class PlanningObserver
{
    public function creating(Planning $planning): void
    {
        $planning->period_id = Period::getActiveOne()->id;
    }

    /**
     * Handle the Planning "created" event.
     */
    public function created(Planning $planning): void
    {
        //
    }

    /**
     * Handle the Planning "updated" event.
     */
    public function updated(Planning $planning): void
    {
        //
    }

    /**
     * Handle the Planning "deleted" event.
     */
    public function deleted(Planning $planning): void
    {
        //
    }

    /**
     * Handle the Planning "restored" event.
     */
    public function restored(Planning $planning): void
    {
        //
    }

    /**
     * Handle the Planning "force deleted" event.
     */
    public function forceDeleted(Planning $planning): void
    {
        //
    }
}
