<?php

namespace App\Filament\Resources\Salarygrades\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;

class SalarygradeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('grade_code')
                ->required(),
                TextInput::make('grade_name')
                ->required(),
                TextInput::make('minimum_salary')
                ->placeholder('Rp 1.000'),
                TextInput::make('maximum_salary')
                ->placeholder('Rp 1.000.000'),
                TextArea::make('description')
                ->placeholder('Opsional'),
            ]);
    }
}   
