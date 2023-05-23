<?php

namespace App\Filament\Resources\PlanningResource\Pages;

use App\Filament\Resources\PlanningResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlanning extends EditRecord
{
    protected static string $resource = PlanningResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
