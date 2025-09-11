<?php

namespace App\Filament\Resources\Perusahaans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class PerusahaanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_perusahaan')
                ->required(),
                TextInput::make('pic')
                ->required(),
                TextInput::make('alamat')
                ->required(),
                TextInput::make('phone')
                ->numeric() //hanya angka
                ->required(),
            ]);
    }
}
