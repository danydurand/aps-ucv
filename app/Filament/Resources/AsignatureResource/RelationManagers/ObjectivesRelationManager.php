<?php

namespace App\Filament\Resources\AsignatureResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Grid;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ObjectivesRelationManager extends RelationManager
{
    protected static string $relationship = 'objectives';
    protected static ?string $pluralLabel = 'Objetivos Especificos';
    protected static ?string $modelLabel = 'Objetivo';

    protected static ?string $recordTitleAttribute = 'description';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('order')
                ->label('Orden')
                ->columnSpan(1)
                ->required(),
            Forms\Components\TextInput::make('description')
                ->label('Descripción')
                ->columnSpan(2)
                ->required()
                ->maxLength(100),
            Forms\Components\Textarea::make('content')
                ->label('Contenido')
                ->columnSpan(3)
                ->rows(2)
                ->required(),
            Forms\Components\Textarea::make('books')
                ->label('Bibliografía')
                ->columnSpan(3)
                ->rows(2)
        ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('semester.name')
            ])->defaultSort('order')
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
