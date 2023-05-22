<?php

namespace App\Filament\Resources\SemesterResource\Pages;

use App\Filament\Resources\SemesterResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSemester extends EditRecord
{
    protected static string $resource = SemesterResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
