<?php

namespace App\Services;

use App\Models\Professor;
use App\Models\Asignature;
use Illuminate\Support\Facades\Log;

class PeriodServices
{
    public static function CopyContentFromLastPeriod($from_period, $to_period)
    {
        Log::info('Getting here');
        $asignatures = Asignature::where('period_id', $from_period->id)->get();
        Log::info('The last period has: '.count($asignatures).' asignatures');
        foreach($asignatures as $asignature) {
            Log::info('Copying asignature: '.$asignature->name);
            $new_asignature = $asignature->replicate()->fill([
                'period_id' => $to_period->id,
            ]);
            $new_asignature->save();
        }
        $professors = Professor::where('period_id', $from_period->id)->get();
        Log::info('The last period has: '.count($asignatures).' professors');
        foreach($professors as $professor) {
            Log::info('Copying professor: '.$professor->name);
            $new_professor = $professor->replicate()->fill([
                'period_id' => $to_period->id,
            ]);
            $new_professor->save();
        }
    }

}
