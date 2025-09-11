<?php

namespace App\Filament\Resources\Salarygrades;

use App\Filament\Resources\Salarygrades\Pages\CreateSalarygrade;
use App\Filament\Resources\Salarygrades\Pages\EditSalarygrade;
use App\Filament\Resources\Salarygrades\Pages\ListSalarygrades;
use App\Filament\Resources\Salarygrades\Pages\ViewSalarygrade;
use App\Filament\Resources\Salarygrades\Schemas\SalarygradeForm;
use App\Filament\Resources\Salarygrades\Schemas\SalarygradeInfolist;
use App\Filament\Resources\Salarygrades\Tables\SalarygradesTable;
use App\Models\Salarygrade;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SalarygradeResource extends Resource
{
    protected static ?string $model = Salarygrade::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCurrencyDollar;

    protected static ?string $recordTitleAttribute = 'salary';

    public static function getNavigationGroup(): ?string
   {
       return 'Master Data';
   }

    public static function form(Schema $schema): Schema
    {
        return SalarygradeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SalarygradeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SalarygradesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSalarygrades::route('/'),
            'create' => CreateSalarygrade::route('/create'),
            'view' => ViewSalarygrade::route('/{record}'),
            'edit' => EditSalarygrade::route('/{record}/edit'),
        ];
    }
}
