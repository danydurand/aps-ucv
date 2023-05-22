<?php

namespace App\Observers;

use App\Models\Period;
use App\Services\PeriodServices;
use Illuminate\Support\Facades\Log;

class PeriodObserver
{
    /**
     * Handle the Period "created" event.
     */
    public function created(Period $period): void
    {
        if ($period->is_active) {
            Period::where('is_active',true)
                    ->where('id', '!=', $period->id)
                    ->update(['is_active' => false]);
        }
        if (Period::all()->count() > 1) {
            Log::info('Coping last Period data');
            $lastPeriod = Period::latest('id')->get()[1];
            Log::info('Last Period is: ' . $lastPeriod->name);
            PeriodServices::CopyContentFromLastPeriod($lastPeriod, $period);
        }
    }

    /**
     * Handle the Period "updated" event.
     */
    public function updated(Period $period): void
    {
        if ($period->is_active) {
            Period::where('is_active',true)
                    ->where('id', '!=', $period->id)
                    ->update(['is_active' => false]);
        }
    }

    /**
     * Handle the Period "deleted" event.
     */
    public function deleted(Period $period): void
    {
        if ($period->is_active) {
            Period::latest('id')->first()->update(['is_active' => true]);
        }
    }

    /**
     * Handle the Period "restored" event.
     */
    public function restored(Period $period): void
    {
        //
    }

    /**
     * Handle the Period "force deleted" event.
     */
    public function forceDeleted(Period $period): void
    {
        //
    }
}
