<?php

namespace App\Filament\Resources\Attendances\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class AttendanceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\Select::make('user_id')
                ->relationship('user', 'name')
                ->label('Karyawan')
                ->searchable()
                ->required(),

            Forms\Components\DatePicker::make('date')
                ->label('Tanggal')
                ->required(),

            Forms\Components\TimePicker::make('check_in')->label('Jam Masuk'),
            Forms\Components\TimePicker::make('check_out')->label('Jam Pulang'),

            Forms\Components\TextInput::make('overtime')
                ->label('Lembur (jam)')
                ->numeric()
                ->default(0),

            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'hadir' => 'Hadir',
                    'izin' => 'Izin',
                    'sakit' => 'Sakit',
                    'cuti' => 'Cuti',
                    'lembur' => 'Lembur',
                    'alpha' => 'Alpha',
                ])
                ->required(),
        ]);
    }
}
