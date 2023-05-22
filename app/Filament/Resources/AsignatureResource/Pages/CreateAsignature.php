<?php

namespace App\Filament\Resources\AsignatureResource\Pages;

use App\Filament\Resources\AsignatureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAsignature extends CreateRecord
{
    protected static string $resource = AsignatureResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
