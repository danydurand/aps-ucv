<?php

namespace App\Services;

use App\Models\Asignature;
use App\Models\Objective;

class AsignatureServices
{
    public static function UpdateObjectivesCount($period_id)
    {
        $asignatures = Asignature::all();
        foreach ($asignatures as $asignature) {
            $count = Objective::whereAsignatureId($asignature->id)
                            ->wherePeriodId($period_id)
                            ->count();
            $asignature->update(['objectives_count' => $count]);
        }
    }

}
