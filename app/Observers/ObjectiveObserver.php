<?php

namespace App\Observers;

use App\Models\Objective;
use App\Models\Period;
use App\Services\ObjectiveServices;

class ObjectiveObserver
{
    protected $service;

    public function __construct(ObjectiveServices $service)
    {
        $this->service = $service;
    }


    public function creating(Objective $objective): void
    {
        $objective->period_id = Period::getActiveOne()->id;
    }
    /**
     * Handle the Objective "created" event.
     */
    public function created(Objective $objective): void
    {
        $this->service->UpdateObjectivesCount($objective->asignature, $objective->period_id);
        // $objective->asignature->increment('objectives_count');
    }

    /**
     * Handle the Objective "updated" event.
     */
    public function updated(Objective $objective): void
    {
        //
    }

    /**
     * Handle the Objective "deleted" event.
     */
    public function deleted(Objective $objective): void
    {
        $this->service->UpdateObjectivesCount($objective->asignature, $objective->period_id);
    }

    /**
     * Handle the Objective "restored" event.
     */
    public function restored(Objective $objective): void
    {
        //
    }

    /**
     * Handle the Objective "force deleted" event.
     */
    public function forceDeleted(Objective $objective): void
    {
        //
    }
}
