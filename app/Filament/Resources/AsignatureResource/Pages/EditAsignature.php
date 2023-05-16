<?php

namespace App\Filament\Resources\AsignatureResource\Pages;

use App\Filament\Resources\AsignatureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAsignature extends EditRecord
{
    protected static string $resource = AsignatureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
