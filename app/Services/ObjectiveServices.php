<?php

namespace App\Services;

use App\Models\Asignature;
use App\Models\Objective;

class ObjectiveServices
{
    public function UpdateObjectivesCount(Asignature $asignature, $period_id)
    {
        $count = Objective::whereAsignatureId($asignature->id)
                        ->wherePeriodId($period_id)
                        ->count();
        $asignature->update(['objectives_count' => $count]);
    }

}
