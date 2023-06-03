<?php

namespace App\Filament\Resources\ProfessorResource\RelationManagers;

use App\Models\Asignature;
use App\Models\Period;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProfessorAsignaturesRelationManager extends RelationManager
{
    protected static string $relationship = 'professor_asignatures';
    protected static ?string $title = 'Materias';
    protected static ?string $modelLabel = 'Materia';

    protected static ?string $recordTitleAttribute = 'section';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('asignature_id')
                    ->label('Materia')
                    ->columnSpan(2)
                    ->required()
                    ->options(function () {
                        $perid_id = Period::getActiveOne()->id;
                        return Asignature::where('period_id',$perid_id)
                            ->orderBy('name', 'asc')
                            ->pluck('name', 'id');
                    }),
                Forms\Components\TextInput::make('section')
                    ->label('Seccion')
                    ->required()
                    ->maxLength(5),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('asignature.name')
                    ->label('Materia'),
                Tables\Columns\TextColumn::make('section')
                    ->label('Seccion')
                    ->alignCenter(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        // $data['user_id'] = auth()->id();
                        $data['period_id'] = Period::getActiveOne()->id;

                        return $data;
                    }),
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
