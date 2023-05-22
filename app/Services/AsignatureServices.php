<?php

namespace App\Services;

use App\Models\Asignature;
use App\Models\Objective;

class AsignatureServices
{
    public static function UpdateObjectivesCount($semester_id)
    {
        $asignatures = Asignature::all();
        foreach ($asignatures as $asignature) {
            $count = Objective::whereAsignatureId($asignature->id)
                            ->whereSemesterId($semester_id)
                            ->count();
            $asignature->update(['objectives_count' => $count]);
        }
    }

}
