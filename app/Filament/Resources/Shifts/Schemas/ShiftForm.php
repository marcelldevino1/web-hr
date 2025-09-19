<?php

namespace App\Filament\Resources\Shifts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Toggle;

class ShiftForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('shift_name')
                ->required(),
                TimePicker::make('start_time')
                ->required()
                ->withoutseconds(),
                TimePicker::make('end_time')
                ->required()
                ->withoutseconds(),
                TextInput::make('tolerance_in_min')
                ->label('Tolerance (Minute)')
                ->default(0)
                ->required(),
                Toggle::make('is_night_shift')
                ->required()
                ->label('Night Shift')
                ->default('false'),
            ]);
    }
}
