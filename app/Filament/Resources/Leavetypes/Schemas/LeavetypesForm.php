<?php

namespace App\Filament\Resources\Leavetypes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\Toggle;

class LeavetypesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->required(),
                TextArea::make('description')
                ->required(),
                TextInput::make('max_days')
                ->required()
                ->numeric()
                ->minvalue(1), //minimal 1 hari
                Toggle::make('is_paid')
                ->onColor('success')
                ->offColor('danger'),
                ]);
    }
}
