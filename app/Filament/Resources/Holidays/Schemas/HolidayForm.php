<?php

namespace App\Filament\Resources\Holidays\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\DatePicker;

class HolidayForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('holiday_name')
                ->required(),
                DatePicker::make('date')
                ->required()
                ->native('false'),
                TextInput::make('region')
                ->required(),
                TextArea::make('description')
                ->required(),
            ]);
    }
}
