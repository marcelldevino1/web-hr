<?php

namespace App\Filament\Resources\Leavetypes\Pages;

use App\Filament\Resources\Leavetypes\LeavetypesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLeavetypes extends ListRecords
{
    protected static string $resource = LeavetypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
