<?php

namespace App\Filament\Resources\Leavetypes\Pages;

use App\Filament\Resources\Leavetypes\LeavetypesResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditLeavetypes extends EditRecord
{
    protected static string $resource = LeavetypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
