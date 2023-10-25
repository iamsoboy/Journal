<?php

namespace App\Filament\Resources\ManuscriptResource\Pages;

use App\Filament\Resources\ManuscriptResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageManuscripts extends ManageRecords
{
    protected static string $resource = ManuscriptResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
