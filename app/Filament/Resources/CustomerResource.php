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
    protected static ?string $navigationLabel = 'Customers';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Customer Name'),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->label('Email'),

                Forms\Components\Select::make('billing_address_id')
                    ->relationship('billingAddress', 'address_line_1')
                    ->label('Billing Address')
                    ->searchable(),

                Forms\Components\Select::make('shipping_address_id')
                    ->relationship('shippingAddress', 'address_line_1')
                    ->label('Shipping Address')
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                ->sortable()
                ->label('ID'),

            Tables\Columns\TextColumn::make('name')
                ->sortable()
                ->searchable()
                ->label('Customer Name'),

            Tables\Columns\TextColumn::make('email')
                ->searchable()
                ->label('Email'),

            Tables\Columns\TextColumn::make('billingAddress.address_line_1')
                ->label('Billing Address'),

            Tables\Columns\TextColumn::make('shippingAddress.address_line_1')
                ->label('Shipping Address'),

            Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->dateTime(),

            Tables\Columns\TextColumn::make('updated_at')
                ->label('Updated At')
                ->dateTime(),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}