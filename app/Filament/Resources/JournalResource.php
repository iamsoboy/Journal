<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JournalResource\Pages;
use App\Filament\Resources\JournalResource\RelationManagers;
use App\Models\Journal;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class JournalResource extends Resource
{
    protected static ?string $model = Journal::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(3)
                    ->schema([
                        FileUpload::make('image')->image(),
                        TextInput::make('title')
                            ->required()
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state) {
                                $set('slug', Str::slug($state));
                            })
                            ->maxLength(191),
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(191),
                    ]),
                Grid::make(1)
                    ->schema([
                        RichEditor::make('body'),
                    ]),
                Grid::make(2)
                    ->schema([
                        TextInput::make('issue')
                            ->maxLength(191),
                        TextInput::make('volume')
                            ->maxLength(191),
                        TextInput::make('cost')
                            ->maxLength(191),
                        FileUpload::make('template')->acceptedFileTypes(['application/pdf'])
                    ]),
                Grid::make(4)
                    ->schema([
                        Select::make('category_id')
                            ->relationship('category', 'name'),
                        TextInput::make('unique_code')
                            ->label('E-ISSN')
                            ->required()
                            ->maxLength(191),
                        TextInput::make('issn')
                            ->label('P-ISSN')
                            ->maxLength(191),
                        TextInput::make('doi')
                            ->label('DOI')
                            ->maxLength(191),
                    ]),
                Grid::make(3)
                    ->schema([
                        Toggle::make('featured')
                            ->required()
                            ->default(false),
                        Toggle::make('slider')
                            ->default(false)
                            ->label('Show in Slider'),
                        Toggle::make('status')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable(),
                TextColumn::make('slug')->limit(20),
                TextColumn::make('category.name')->placeholder('Uncategorized'),
                ImageColumn::make('image'),
                TextColumn::make('body')->words(20),
                TextColumn::make('issue'),
                TextColumn::make('volume'),
                TextColumn::make('doi'),
                TextColumn::make('cost'),
                IconColumn::make('featured')
                    ->boolean(),
                IconColumn::make('status')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime(),
                TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->defaultSort('title')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListJournals::route('/'),
            'create' => Pages\CreateJournal::route('/create'),
            'edit' => Pages\EditJournal::route('/{record}/edit'),
        ];
    }
}
