<?php

namespace App\Filament\Resources\Leavetypes\Pages;

use App\Filament\Resources\Leavetypes\LeavetypesResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewLeavetypes extends ViewRecord
{
    protected static string $resource = LeavetypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
