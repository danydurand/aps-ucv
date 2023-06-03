<?php

namespace App\Services;

use App\Models\Period;
use App\Models\Professor;
use App\Models\Asignature;
use Illuminate\Support\Facades\Log;

class PeriodServices
{
    public static function CopyContentFromLastPeriod(Period $from_period, Period $to_period)
    {
        $asignatures = Asignature::where('period_id', $from_period->id)->get();
        foreach($asignatures as $asignature) {
            $new_asignature = $asignature->replicate()->fill([
                'period_id'       => $to_period->id,
            ]);
            $new_asignature->save();
        }

        $professors = Professor::where('period_id', $from_period->id)->get();
        foreach($professors as $professor) {
            $new_professor = $professor->replicate()->fill([
                'period_id' => $to_period->id,
            ]);
            $new_professor->save();
        }
    }

    public static function DeleteRelatedData(Period $period)
    {
        Asignature::where('period_id',$period->id)->delete();
        Professor::where('period_id',$period->id)->delete();
    }



}
