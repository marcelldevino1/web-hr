<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->required(),
                TextInput::make('email')
                ->required(),
                TextInput::make('phone')
                ->numeric() // hanya boleh angka
                ->required(),
                TextInput::make('nip')
                ->numeric()
                ->required(),
            ]);
    }
}
