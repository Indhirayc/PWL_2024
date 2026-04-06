<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Grid;


class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                    // Kiri (2/3)
                    Section::make('Post Details')
                        ->description('Fill in the details of the post')
                        ->icon('heroicon-o-document-text')
                        ->schema([

                            // grid 2 kolom
                            Grid::make(2)->schema([
                                TextInput::make('title')
                                    ->rules(['required','min:5','max:50',])
                                    ->columnSpanFull()
                                    ->validationMessages([
                                        'required' => 'Title wajib diisi!',
                                        'min_length' => 'Title minimal 5 karakter!'
                                    ]),
                                TextInput::make('slug')
                                ->rules(['required','min:5',])
                                ->unique(ignoreRecord: true)
                                ->validationMessages([
                                    'required' => 'Slug wajib diisi!',
                                    "unique" => "Slug sudah digunakan!"
                                ]),
                                Select::make('category_id')
                                    ->relationship('category', 'name')
                                    ->required()
                                    ->preload()
                                    ->searchable(),

                                ColorPicker::make('color'),
                            ]),

                            // full width editor
                            MarkdownEditor::make('content')
                                ->columnSpanFull(),

                        ])->columnSpan(2),

                    // Kanan (1/3)
                    Group::make([

                        Section::make('Image Upload')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                FileUpload::make('image')
                                    ->required()
                                    ->image()
                                    ->disk('public')
                                    ->directory('posts')
                                    ->image()
                                    ->imagePreviewHeight('250')
                                    ->maxSize(2048),
                            ]),

                        Section::make('Meta Information')
                            ->icon('heroicon-o-cog-6-tooth')
                            ->schema([
                                TagsInput::make('tags'),
                                Checkbox::make('published'),
                                DateTimePicker::make('published_at'),
                            ]),

                    ])->columnSpan(1),

                ])->columns(3);
    }
}