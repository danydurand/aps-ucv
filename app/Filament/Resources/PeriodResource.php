<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeriodResource\Pages;
use App\Filament\Resources\PeriodResource\RelationManagers;
use App\Models\Period;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeriodResource extends Resource
{
    protected static ?string $model = Period::class;
    protected static ?string $modelLabel = 'Periodo';
    protected static ?string $modelPluralLabel = 'Periodos';
    protected static ?string $navigationIcon = 'heroicon-o-location-marker';
    protected static ?string $navigationGroup = 'gestion';
    protected static ?int $navigationSort = 0;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('')->schema([
                Tab::make('Principal')->schema([
                    Grid::make(6)->schema([
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
                        Forms\Components\DatePicker::make('delivery_notes_limit')
                            ->label('Limit Entr. Notas')
                            ->required(),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Activo ?')
                            ->inline(false)
                            ->required(),
                        Forms\Components\Toggle::make('is_closed')
                            ->label('Cerrado ?')
                            ->inline(false)
                            ->required(),
                    ])
                ]),
                Tab::make('Vacaciones y Feridados')->schema([
                    Forms\Components\Repeater::make('vacations')
                        ->label('Vacaciones y Feriados')
                        ->relationship()
                        ->defaultItems(1)
                        ->columnSpan('full')
                        ->schema([
                            Grid::make(3)->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Nombre')
                                    ->placeholder('Ej: Semana Sta, Carnval, etc.')
                                    ->required()
                                    ->maxLength(50),
                                Forms\Components\DatePicker::make('start_date')
                                    ->label('F. Inicio')
                                    ->required(),
                                Forms\Components\DatePicker::make('end_date')
                                    ->label('F. Final')
                                    ->required(),
                            ])
                    ]),
                ]),
            ])->columnSpanFull()
        ]);
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
                Tables\Columns\TextColumn::make('delivery_notes_limit')
                    ->label('Limit Entr. Notas')
                    ->searchable()
                    ->sortable()
                    ->date('Y-m-d'),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('F. Final')
                    ->searchable()
                    ->sortable()
                    ->date('Y-m-d'),
                Tables\Columns\TextColumn::make('professors_count')
                    ->counts('professors')
                    ->sortable()
                    ->label('Profesores')
                    ->alignCenter(),
                Tables\Columns\TextColumn::make('asignatures_count')
                    ->counts('asignatures')
                    ->sortable()
                    ->label('Materias')
                    ->alignCenter(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Activo ?')
                    ->sortable()
                    ->alignCenter()
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_closed')
                    ->label('Cerrado ?')
                    ->toggleable(isToggledHiddenByDefault: true)
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
            'index' => Pages\ListPeriods::route('/'),
            'create' => Pages\CreatePeriod::route('/create'),
            'edit' => Pages\EditPeriod::route('/{record}/edit'),
        ];
    }
    protected static function getNavigationBadge(): ?string
    {
        return self::getModel()::getActiveOne()->name;
    }

}
