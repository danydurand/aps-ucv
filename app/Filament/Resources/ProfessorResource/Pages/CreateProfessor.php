<?php

namespace App\Filament\Resources\ProfessorResource\Pages;

use App\Filament\Resources\ProfessorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProfessor extends CreateRecord
{
    protected static string $resource = ProfessorResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
