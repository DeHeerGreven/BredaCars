<?php

namespace App\Filament\Resources\CarLogResource\RelationManagers;

use App\Models\Part;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartsRelationManager extends RelationManager
{
    protected static string $relationship = 'carLogsParts';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('part_id')
                ->options(Part::all()->pluck('name', 'id'))
                ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('amount')
                ->numeric()->required()
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
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
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
