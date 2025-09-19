<?php

namespace App\Filament\Resources\Grades\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;

class GradeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('grade_code')
                ->required()
                ->placeholder('contoh: GOO1, GOO2'),
                TextInput::make('grade_name')
                ->required()
                ->placeholder('contoh: Staff, SuperVisor, Manager'),
                TextInput::make('rank')
                ->label('Tingkatan / Level')
                ->numeric()
                ->required()
                ->helpertext('Gunakan angka. Semakin besar, semakin tinggi level'),
                TextArea::make('description')
                ->required(),
            ]);
    }
}
