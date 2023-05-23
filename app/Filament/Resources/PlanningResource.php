<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlanningResource\Pages;
use App\Filament\Resources\PlanningResource\RelationManagers;
use App\Models\Asignature;
use App\Models\Planning;
use App\Models\Professor;
use App\Models\ProfessorAsignature;
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

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('professor_asignature_id')
                    ->options(function () {
                        $asig = ProfessorAsignature::select('asignature_id')
                                                ->where('professor_id',16)
                                                ->get();
                        return Asignature::whereIn('id', $asig)->pluck('name', 'id');
                    })
                    ->required(),
                Forms\Components\Select::make('objective_id')
                    ->relationship('objective', 'id')
                    ->required(),
                Forms\Components\DatePicker::make('estimated_date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('professor_asignature.id'),
                Tables\Columns\TextColumn::make('objective.id'),
                Tables\Columns\TextColumn::make('estimated_date')
                    ->date(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
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
