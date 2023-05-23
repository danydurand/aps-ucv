<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanningResource\Pages;
use App\Filament\Resources\PlanningResource\RelationManagers;
use App\Models\Planning;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlanningResource extends Resource
{
    protected static ?string $model = Planning::class;
    protected static ?string $modelLabel = 'Planificacion';
    protected static ?string $pluralLabel = 'Planificacion';
    protected static ?string $navigationIcon = 'heroicon-o-clipboard-list';
    protected static ?string $navigationGroup = 'gestion';
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\Select::make('period_id')
                //     ->relationship('period', 'name')
                //     ->required(),
                Forms\Components\Select::make('asignature_id')
                    ->relationship('asignature', 'name')
                    ->required(),
                Forms\Components\Select::make('professor_id')
                    ->relationship('professor', 'name')
                    ->required(),
                Forms\Components\Select::make('objective_id')
                    ->relationship('objective', 'description')
                    ->required(),
                Forms\Components\DatePicker::make('estimated_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('period.name'),
                Tables\Columns\TextColumn::make('asignature.name'),
                Tables\Columns\TextColumn::make('professor.name'),
                Tables\Columns\TextColumn::make('objective.description'),
                Tables\Columns\TextColumn::make('estimated_date')
                    ->date('Y-m-d'),
                Tables\Columns\TextColumn::make('created_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d H:i:s'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d H:i:s'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
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
            'index' => Pages\ListPlannings::route('/'),
            'create' => Pages\CreatePlanning::route('/create'),
            'edit' => Pages\EditPlanning::route('/{record}/edit'),
        ];
    }
}
