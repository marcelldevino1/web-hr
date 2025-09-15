<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Infolists\Components\TextEntry::make('name'),
            Infolists\Components\TextEntry::make('email'),
            Infolists\Components\TextEntry::make('roles.name')->label('Role'),
            Infolists\Components\TextEntry::make('created_at')->dateTime(),
        ]);
    }
}
