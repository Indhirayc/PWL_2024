<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class ProductsTable
{
    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('name'),

                TextColumn::make('sku'),

                TextColumn::make('price'),

                TextColumn::make('stock'),

                ImageColumn::make('image')
                    ->disk('public'),

                TextColumn::make('is_active')
                    ->badge()
                    ->formatStateUsing(fn (bool $state): string =>
                        $state ? 'Active' : 'Inactive'
                    )
                    ->color(fn (bool $state): string =>
                        $state ? 'success' : 'danger'
                    )

            ]);
    }
}