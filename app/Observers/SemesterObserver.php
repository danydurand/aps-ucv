<?php

namespace App\Observers;

use App\Models\Semester;
use App\Services\AsignatureServices;
use App\Services\SemesterServices;
use Illuminate\Support\Facades\Log;

class SemesterObserver
{
    /**
     * Handle the Semester "created" event.
     */
    public function created(Semester $semester): void
    {
        if ($semester->is_active) {
            Semester::where('is_active',true)
                    ->where('id', '!=', $semester->id)
                    ->update(['is_active' => false]);
        }
        Log::info('Coping last Semester data');
        $lastSemester = Semester::latest('id')->get()[1];
        Log::info('Last Semester is: ' . $lastSemester->name);
        SemesterServices::CopyContentFromLastSemester($lastSemester, $semester);
    }

    /**
     * Handle the Semester "updated" event.
     */
    public function updated(Semester $semester): void
    {
        if ($semester->is_active) {
            Semester::where('is_active',true)
                    ->where('id', '!=', $semester->id)
                    ->update(['is_active' => false]);
        }
    }

    /**
     * Handle the Semester "deleted" event.
     */
    public function deleted(Semester $semester): void
    {
        if ($semester->is_active) {
            Semester::latest('id')->first()->update(['is_active' => true]);
        }
    }

    /**
     * Handle the Semester "restored" event.
     */
    public function restored(Semester $semester): void
    {
        //
    }

    /**
     * Handle the Semester "force deleted" event.
     */
    public function forceDeleted(Semester $semester): void
    {
        //
    }
}
