<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SemesterResource\Pages;
use App\Filament\Resources\SemesterResource\RelationManagers;
use App\Models\Semester;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SemesterResource extends Resource
{
    protected static ?string $model = Semester::class;
    protected static ?string $modelLabel = 'Semestre';
    protected static ?string $navigationIcon = 'heroicon-o-location-marker';
    protected static ?string $navigationGroup = 'gestion';
    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nombre')
                    ->required()
                    ->maxLength(30),
                Forms\Components\DatePicker::make('start_date')
                    ->label('F. Inicio')
                    ->required(),
                Forms\Components\DatePicker::make('end_date')
                    ->label('F. Final')
                    ->required(),
                Forms\Components\Toggle::make('is_active')
                    ->label('Activo ?')
                    ->inline(false)
                    ->required(),
                Forms\Components\Toggle::make('is_closed')
                    ->label('Cerrado ?')
                    ->inline(false)
                    ->required(),
            ])->columns(5);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('F. Inicio')
                    ->searchable()
                    ->sortable()
                    ->date('Y-m-d'),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('F. Final')
                    ->searchable()
                    ->sortable()
                    ->date('Y-m-d'),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Activo ?')
                    ->sortable()
                    ->alignCenter()
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_closed')
                    ->label('Cerrado ?')
                    ->sortable()
                    ->alignCenter()
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('F. Creacion')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d H:i:s'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('F. Modif.')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->dateTime('Y-m-d H:i:s'),
            ])->defaultSort('start_date', 'desc')
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
            'index' => Pages\ListSemesters::route('/'),
            'create' => Pages\CreateSemester::route('/create'),
            'edit' => Pages\EditSemester::route('/{record}/edit'),
        ];
    }
    protected static function getNavigationBadge(): ?string
    {
        return self::getModel()::getActiveOne()->name;
    }

}
