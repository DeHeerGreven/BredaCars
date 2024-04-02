<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarLogResource\Pages;
use App\Filament\Resources\CarLogResource\RelationManagers;
use App\Models\CarLog;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class CarLogResource extends Resource
{
    protected static ?string $model = CarLog::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Section::make('Car Log')->schema([
                // Voer de gegevens van de log in
                TextInput::make('name')->label('Name')->required(),
                RichEditor::make('description')->label('Description')->required(),
                // Selecteer de specifieke gebruiker
                Select::make('user_id')
                ->label('User')
                ->relationship('user', 'id')
                ->searchable()
                ->required(), 
                // Selecteer de specifieke appointment
                Select::make('appointment_id')
                    ->label('Appointment')
                    ->relationship('appointment', 'id')
                    ->searchable()
                    ->required(),            
                // Selecteer de specifieke auto
                Select::make('car_id')
                    ->label('Car')
                    ->relationship('car', 'id')
                    ->searchable()
                    ->required(),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            CarLogResource\RelationManagers\PartsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCarLogs::route('/'),
            'create' => Pages\CreateCarLog::route('/create'),
            'edit' => Pages\EditCarLog::route('/{record}/edit'),
        ];
    }
}
