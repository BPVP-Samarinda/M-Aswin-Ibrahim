<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama'),
                Forms\Components\Textarea::make('alamat'),
                Forms\Components\DatePicker::make('tanggal_lahir'),
                Forms\Components\Radio::make('Jenis_kelamin')
                ->options([
                    'Perempuan'=> 'P',
                    'Lakir - laki'=> 'L',
                ]),
                Forms\Components\TextInput::make('telpon'),
                Forms\Components\Toggle::make('status')
                ->onColor('primary')
                ->offColor('danger'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\TextColumn::make('tanggal_lahir'),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('telpon'),
                Tables\Columns\BadgeColumn::make('status')
                ->enum([
                    0 => 'Tidak Aktif',
                    1 => 'Aktif',
                ])->colors([
                    'danger' => static fn ($state): bool => $state = 0,
                    'primary' => static fn ($state): bool => $state = 1,
                ]),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCustomers::route('/'),
        ];
    }
}
