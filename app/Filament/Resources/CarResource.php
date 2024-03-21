<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarResource\Pages;
use App\Filament\Resources\CarResource\RelationManagers;
use App\Models\Car;
use Filament\Forms;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Register a car')
                ->description('Register a new car here.')
                ->collapsible()
                ->schema([
                    TextInput::make('brand')->required(),
                    TextInput::make('model')->required(),
                    Select::make('transaction')
                        ->required()
                        ->options([
                            'geschakeld' => 'Schakel',
                            'automaar' => 'Automaat',
                    ]),
                    Select::make('fuel')
                    ->required()
                    ->options([
                        'benzine' => 'Benzine',
                        'diesel' => 'Diesel',
                        'elektrisch' => 'Elektrisch'
                ]),
                    TextInput::make('color')->required(),
                    TextInput::make('license_plate')->required(),
                ])->columnSpan(2)->columns(2),
            ])->columns(3);
        }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                ->sortable()
                ->searchable()
                ->toggleable(isToggledHiddenByDefault:true),
                TextColumn::make('brand')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('model')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('transaction')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('fuel')
                ->searchable()
                ->toggleable(),
                TextColumn::make('color')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('license_plate')
                ->sortable()
                ->searchable()
                ->toggleable(),
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
