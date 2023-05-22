<?php

namespace App\Observers;

use App\Models\Asignature;
use Illuminate\Support\Facades\Log;

class AsignatureObserver
{
    /**
     * Handle the Asignature "created" event.
     */
    public function creating(Asignature $asignature): ?bool
    {
        $count  = 0;
        $count += !empty($asignature->presentation) ? 1 : 0;
        $count += !empty($asignature->general_objective) ? 1 : 0;
        $asignature->info_count = $count.'/2';
        return true;
    }

    public function created(Asignature $asignature): void
    {
        //
    }

    public function updating(Asignature $asignature): ?bool
    {
        $count  = 0;
        $count += !empty($asignature->presentation) ? 1 : 0;
        $count += !empty($asignature->general_objective) ? 1 : 0;
        $asignature->info_count = $count.'/2';
        return true;
    }

    /**
     * Handle the Asignature "updated" event.
     */
    public function updated(Asignature $asignature): void
    {
        //
    }

    /**
     * Handle the Asignature "deleted" event.
     */
    public function deleted(Asignature $asignature): void
    {
        //
    }

    /**
     * Handle the Asignature "restored" event.
     */
    public function restored(Asignature $asignature): void
    {
        //
    }

    /**
     * Handle the Asignature "force deleted" event.
     */
    public function forceDeleted(Asignature $asignature): void
    {
        //
    }
}
