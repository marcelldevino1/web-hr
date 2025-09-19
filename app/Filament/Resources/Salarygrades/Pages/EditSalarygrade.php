<?php

namespace App\Filament\Resources\Salarygrades\Pages;

use App\Filament\Resources\Salarygrades\SalarygradeResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditSalarygrade extends EditRecord
{
    protected static string $resource = SalarygradeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
