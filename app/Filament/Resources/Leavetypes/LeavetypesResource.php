<?php

namespace App\Filament\Resources\Leavetypes;

use App\Filament\Resources\Leavetypes\Pages\CreateLeavetypes;
use App\Filament\Resources\Leavetypes\Pages\EditLeavetypes;
use App\Filament\Resources\Leavetypes\Pages\ListLeavetypes;
use App\Filament\Resources\Leavetypes\Pages\ViewLeavetypes;
use App\Filament\Resources\Leavetypes\Schemas\LeavetypesForm;
use App\Filament\Resources\Leavetypes\Schemas\LeavetypesInfolist;
use App\Filament\Resources\Leavetypes\Tables\LeavetypesTable;
use App\Models\Leavetypes;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LeavetypesResource extends Resource
{
   protected static ?string $model = Leavetypes::class;

   protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

   protected static ?string $recordTitleAttribute = 'name';

   public static function getNavigationGroup(): ?string
   {
       return 'HRIS Master Data';
   }

   public static function getNavigationSort(): ?int
   {
       return 1;
   }

   public static function form(Schema $schema): Schema
   {
       return LeavetypesForm::configure($schema);
   }

   public static function infolist(Schema $schema): Schema
   {
       return LeavetypesInfolist::configure($schema);
   }

   public static function table(Table $table): Table
   {
       return LeavetypesTable::configure($table);
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
           'index' => ListLeavetypes::route('/'),
           'create' => CreateLeavetypes::route('/create'),
           'view' => ViewLeavetypes::route('/{record}'),
           'edit' => EditLeavetypes::route('/{record}/edit'),
       ];
   }
}