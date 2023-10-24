<?php

namespace App\Filament\Resources\EditorialBoardResource\Pages;

use App\Filament\Resources\EditorialBoardResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEditorialBoards extends ManageRecords
{
    protected static string $resource = EditorialBoardResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
