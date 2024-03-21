<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppointmentResource\Pages;
use App\Filament\Resources\AppointmentResource\RelationManagers;
use App\Filament\Resources\AppointmentResource\RelationManagers\UsersRelationManager;
use App\Models\Appointment;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Users')->schema([
                    Select::make('users')
                        ->relationship('users', 'name')
                        ->multiple()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                ->sortable()
                ->searchable()
                ->toggleable(isToggledHiddenByDefault:true),
                TextColumn::make('first_name')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('infix')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('last_name')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('email')
                ->searchable()
                ->toggleable(),
                TextColumn::make('street')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('house_number')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('postal_code')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('city')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('phone_number')
                ->searchable()
                ->toggleable(),
                TextColumn::make('brand')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('model')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('appointment_type')
                ->sortable()
                ->searchable()
                ->toggleable(),
                TextColumn::make('appointment_date')
                ->date()
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
           
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAppointments::route('/'),
            // 'create' => Pages\CreateAppointment::route('/create'),
            'edit' => Pages\EditAppointment::route('/{record}/edit'),
        ];
    }
}
