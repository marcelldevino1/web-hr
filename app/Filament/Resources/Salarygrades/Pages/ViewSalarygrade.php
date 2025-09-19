<?php

namespace App\Filament\Resources\Salarygrades\Pages;

use App\Filament\Resources\Salarygrades\SalarygradeResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewSalarygrade extends ViewRecord
{
    protected static string $resource = SalarygradeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
