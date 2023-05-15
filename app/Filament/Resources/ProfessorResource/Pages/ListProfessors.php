<?php

namespace App\Filament\Resources\ProfessorResource\Pages;

use App\Filament\Resources\ProfessorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfessors extends ListRecords
{
    protected static string $resource = ProfessorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
