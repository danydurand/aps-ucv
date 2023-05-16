<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsignatureResource\Pages;
use App\Filament\Resources\AsignatureResource\RelationManagers;
use App\Filament\Resources\AsignatureResource\RelationManagers\ObjectivesRelationManager;
use App\Models\Asignature;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AsignatureResource extends Resource
{
    protected static ?string $model = Asignature::class;
    protected static ?string $modelLabel = 'Materia';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Grid::make(4)
                ->schema([
                Forms\Components\TextInput::make('code')
                    ->label('Codigo')
                    ->required()
                    ->maxLength(10)
                    ->columnSpan(1),
                Forms\Components\TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(150)
                    ->columnSpan(3),
                Forms\Components\TextInput::make('credits')
                    ->label('Creditos')
                    ->required()
                    ->columnSpan(1),
                Forms\Components\Select::make('department_id')
                    ->label('Departamento')
                    ->relationship('department', 'name')
                    ->required()
                    ->columnSpan(2),
                Forms\Components\Select::make('type')
                    ->label('Tipo')
                    ->options(Asignature::TYPE_OPTIONS)
                    ->required()
                    ->columnSpan(1),
                Forms\Components\Textarea::make('presentation')
                    ->label('Presentacion')
                    ->rows(2)
                    ->columnSpan(4),
                Forms\Components\Textarea::make('general_objective')
                    ->label('Objectivo General')
                    ->rows(2)
                    ->columnSpan(4),
                // Forms\Components\Textarea::make('themes')
                //     ->label('Temas')
                //     ->rows(2)
                //     ->columnSpan(4),
                // Forms\Components\Textarea::make('purpose')
                //     ->label('Propósito')
                //     ->rows(2)
                //     ->columnSpan(4),
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code')
                    ->label('Codigo')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('short_name')
                    ->label('Nombre')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('department.short_name')
                    ->label('Depto')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('type_name')
                    ->label('Tipo')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('credits')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d'),
            ])
            ->filters([
                SelectFilter::make('Dpto')
                    ->relationship('department', 'name'),
                SelectFilter::make('type')
                    ->label('Tipo')
                    ->options(Asignature::TYPE_OPTIONS),
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
            ObjectivesRelationManager::class,
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
