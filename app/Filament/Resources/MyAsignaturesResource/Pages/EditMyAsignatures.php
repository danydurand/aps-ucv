<?php

namespace App\Filament\Resources\MyAsignaturesResource\Pages;

use App\Filament\Resources\MyAsignaturesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMyAsignatures extends EditRecord
{
    protected static string $resource = MyAsignaturesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
