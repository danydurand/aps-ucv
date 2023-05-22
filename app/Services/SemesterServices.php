<?php

namespace App\Services;

use App\Models\Professor;
use App\Models\Semester;
use App\Models\Asignature;
use App\Models\Objective;
use Illuminate\Support\Facades\Log;

class SemesterServices
{
    public static function CopyContentFromLastSemester($from_semester, $to_semester)
    {
        Log::info('Getting here');
        $asignatures = Asignature::where('semester_id', $from_semester->id)->get();
        Log::info('The last semester has: '.count($asignatures).' asignatures');
        foreach($asignatures as $asignature) {
            Log::info('Copying asignature: '.$asignature->name);
            $new_asignature = $asignature->replicate()->fill([
                'semester_id' => $to_semester->id,
            ]);
            $new_asignature->save();
        }
        $professors = Professor::where('semester_id', $from_semester->id)->get();
        Log::info('The last semester has: '.count($asignatures).' professors');
        foreach($professors as $professor) {
            Log::info('Copying professor: '.$professor->name);
            $new_professor = $professor->replicate()->fill([
                'semester_id' => $to_semester->id,
            ]);
            $new_professor->save();
        }
    }

}
