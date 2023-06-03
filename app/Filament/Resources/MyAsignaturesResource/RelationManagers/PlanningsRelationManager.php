<?php

namespace App\Filament\Resources\MyAsignaturesResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlanningsRelationManager extends RelationManager
{
    protected static string $relationship = 'plannings';

    protected static ?string $recordTitleAttribute = 'estimated_date';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('objective_id')
                    ->relationship('objective', 'description'),
                Forms\Components\TextInput::make('estimated_date')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('objective.description'),
                Tables\Columns\TextColumn::make('estimated_date'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
