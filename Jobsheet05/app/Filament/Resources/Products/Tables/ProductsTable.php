<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable(),

                TextColumn::make('sku')
                    ->sortable(),

                TextColumn::make('price')
                    ->sortable(),

                TextColumn::make('stock')
                    ->sortable(),

                ImageColumn::make('image')
                    ->disk('public'),

                TextColumn::make('is_active')
                    ->label('Status')
                    ->badge()
                    ->color(fn ($state) => $state ? 'success' : 'danger')
                    ->formatStateUsing(fn ($state) => $state ? 'Active' : 'Inactive'),
            ]);
    }
}