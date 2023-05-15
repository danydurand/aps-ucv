<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsignatureResource\Pages;
use App\Filament\Resources\AsignatureResource\RelationManagers;
use App\Filament\Resources\AsignatureResource\RelationManagers\ObjectivesRelationManager;
use App\Filament\Resources\AsignatureResource\RelationManagers\SectionsRelationManager;
use App\Models\Asignature;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AsignatureResource extends Resource
{
    protected static ?string $model = Asignature::class;
    protected static ?string $modelLabel = 'Asignature';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(6)
                ->schema([
                Forms\Components\TextInput::make('code')
                    ->columnSpan(1)
                    ->required()
                    ->maxLength(10),
                Forms\Components\TextInput::make('name')
                    ->columnSpan(2)
                    ->required()
                    ->maxLength(150),
                Forms\Components\Toggle::make('is_active')
                    ->columnSpan(1)
                    ->inline(false)
                    ->required(),
                Forms\Components\Select::make('professor_id')
                    ->columnSpan(2)
                    ->relationship('professor', 'name')
                    ->required(),
                // Forms\Components\TextInput::make('type')
                //     ->maxLength(1),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('objectives_count')
                    ->label('Objectives')
                    ->alignCenter()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sections_count')
                    ->label('Sections')
                    ->alignCenter()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->alignCenter()
                    ->sortable()
                    ->boolean(),
                Tables\Columns\TextColumn::make('professor.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable()
                    ->sortable(),
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
            SectionsRelationManager::class,
            ObjectivesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAsignatures::route('/'),
            'create' => Pages\CreateAsignature::route('/create'),
            'edit' => Pages\EditAsignature::route('/{record}/edit'),
        ];
    }
}
