<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfessorResource\Pages;
use App\Filament\Resources\ProfessorResource\RelationManagers;
use App\Filament\Resources\ProfessorResource\RelationManagers\AsignaturesRelationManager;
use App\Filament\Resources\ProfessorResource\RelationManagers\ProfessorAsignaturesRelationManager;
use App\Models\Asignature;
use App\Models\Professor;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfessorResource extends Resource
{
    protected static ?string $model = Professor::class;
    protected static ?string $modelLabel = 'Profesor';
    protected static ?string $pluralLabel = 'Profesores';
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'gestion';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(50),
                Forms\Components\Select::make('department_id')
                    ->relationship('department', 'name')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(100),
                Forms\Components\Toggle::make('is_active')
                    ->inline(false)
                    ->required(),
                Forms\Components\TextInput::make('id_document')
                    ->unique(ignoreRecord: true)
                    ->maxLength(30),
                Forms\Components\TextInput::make('phones')
                    ->tel()
                    ->maxLength(50),
                // Select::make('asignatures')
                //     ->columnSpan(3)
                //     ->multiple()
                //     ->relationship('asignatures', 'name'),
                Forms\Components\TextInput::make('comments')
                    ->columnSpan(3)
                    ->maxLength(250),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('department.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('professor_asignatures_count')
                    ->label('Asignatures')
                    ->alignCenter()
                    ->sortable()
                    ->counts('professor_asignatures'),
                // Tables\Columns\TextColumn::make('asignatures_count')
                //     ->label('Asignatures')
                //     ->alignCenter()
                //     ->getStateUsing(fn (Model $record): int => $record->asignatures()->count()),
                Tables\Columns\TextColumn::make('email')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->sortable()
                    ->alignCenter()
                    ->boolean(),
                Tables\Columns\TextColumn::make('id_document')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('phones')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d H:i:s'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d H:i:s'),
            ])
            ->filters([
                SelectFilter::make('Department')
                    ->label('Depto')
                    ->relationship('department', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::fromActivePeriod();
    }

    public static function getRelations(): array
    {
        return [
            ProfessorAsignaturesRelationManager::class
            // AsignaturesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfessors::route('/'),
            'create' => Pages\CreateProfessor::route('/create'),
            'edit' => Pages\EditProfessor::route('/{record}/edit'),
        ];
    }
}
