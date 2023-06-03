<?php

namespace App\Filament\Resources\AsignatureResource\Pages;

use App\Filament\Resources\AsignatureResource;
use App\Models\Period;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAsignature extends CreateRecord
{
    protected static string $resource = AsignatureResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['period_id'] = Period::getActiveOne()->id;

        return $data;
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
