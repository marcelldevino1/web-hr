<?php

namespace App\Filament\Resources\Salarygrades\Pages;

use App\Filament\Resources\Salarygrades\SalarygradeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSalarygrades extends ListRecords
{
    protected static string $resource = SalarygradeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
