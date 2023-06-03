<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MyAsignaturesResource\Pages;
use App\Filament\Resources\MyAsignaturesResource\RelationManagers;
use App\Filament\Resources\MyAsignaturesResource\RelationManagers\PlanningsRelationManager;
use App\Models\MyAsignatures;
use App\Models\Objective;
use App\Models\Period;
use App\Models\ProfessorAsignature;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class MyAsignaturesResource extends Resource
{
    protected static ?string $model = ProfessorAsignature::class;
    protected static ?string $modelLabel = 'Planificacion';
    protected static ?string $pluralLabel = 'Planificacion';
    protected static ?string $navigationIcon = 'heroicon-o-truck';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('asignature_id')
                    ->disabled()
                    ->afterStateHydrated(function ($state) {
                        Session::put('materia', $state);
                    }),
                Forms\Components\TextInput::make('asignature_name')
                    ->label('Materia')
                    ->disabled(),
                Forms\Components\TextInput::make('section')
                    ->label('Seccion')
                    ->disabled(),
                Forms\Components\Repeater::make('plannings')
                    ->label('Planificacion')
                    ->relationship()
                    ->defaultItems(1)
                    ->columnSpan('full')
                    ->schema([
                        Forms\Components\DatePicker::make('estimated_date')
                            ->label('Fecha Estimada')
                            ->columnSpan(1)
                            ->required(),
                        Forms\Components\Select::make('objective_id')
                            ->label('Objetivo')
                            ->required()
                            ->columnSpan(3)
                            ->options(function () {
                                $asignature_id = Session::get('materia');
                                Log::info('Materia: '.$asignature_id);
                                Log::info('Professor: '.auth()->user()->entity_id);
                                $period_id = Period::getActiveOne()->id;
                                Log::info('Periodo: '.$period_id);
                                return Objective::where('asignature_id', $asignature_id)
                                                ->where('period_id', $period_id)
                                                ->pluck('description', 'id');
                            }),
                    ])->columns(4)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('asignature.name')
                    ->label('Materia'),
                TextColumn::make('section')
                    ->alignCenter()
                    ->label('Seccion'),
                TextColumn::make('plannings_count')
                    ->counts('plannings')
                    ->label('Planif')
                    ->alignCenter()
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

    protected static function getNavigationBadge(): ?string
    {
        return Period::getActiveOne()->name;
    }

    public static function getEloquentQuery(): Builder
    {
        return ProfessorAsignature::with('asignature')
            ->where('professor_id',auth()->user()->entity_id);
    }

    public static function getRelations(): array
    {
        return [
            // PlanningsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMyAsignatures::route('/'),
            'create' => Pages\CreateMyAsignatures::route('/create'),
            'edit' => Pages\EditMyAsignatures::route('/{record}/edit'),
        ];
    }
}
