<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
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
use function Termwind\ValueObjects\truncate;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(3)
                    ->schema([
                        FileUpload::make('image')
                            ->image(),
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
                        RichEditor::make('abstract')
                            ->required(),
                    ]),
                Grid::make(2)
                    ->schema([
                        FileUpload::make('attachment')
                            ->acceptedFileTypes(['application/pdf']),
                        Select::make('journal_id')
                            ->relationship('journal', 'title')
                            ->label('Select Journal')
                            ->required(),
                        Textarea::make('keywords'),
                        Textarea::make('authors')
                            ->required(),
                    ]),
                Grid::make(3)
                    ->schema([
                        Textarea::make('references'),
                        TextInput::make('unique_code')
                            ->label('E-ISSN')
                            ->maxLength(191),
                        TextInput::make('issn')
                            ->label('P-ISSN')
                            ->maxLength(191),
                        TextInput::make('doi')
                            ->label('DOI')
                            ->maxLength(191),
                        TextInput::make('cost')
                            ->numeric()
                            ->maxLength(191),
                    ]),
                Grid::make(3)
                    ->schema([
                        Toggle::make('featured')
                            ->inline(false),
                        Toggle::make('status')
                            ->inline(false)
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('journal.title')
                    ->wrap(),
                TextColumn::make('title')
                    ->wrap(),
                TextColumn::make('slug')
                    ->wrap(),
                ImageColumn::make('image')->circular(),
                TextColumn::make('abstract')
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getLimit()) {
                            return null;
                        }

                        // Only render the tooltip if the column contents exceeds the length limit.
                        return $state;
                    }),
                TextColumn::make('unique_code'),
                TextColumn::make('issn'),
                TextColumn::make('doi'),
                TextColumn::make('keywords')->wrap(),
                TextColumn::make('authors')->wrap(),
                ImageColumn::make('attachment'),
                TextColumn::make('references')
                    ->limit(50)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();

                        if (strlen($state) <= $column->getLimit()) {
                            return null;
                        }

                        // Only render the tooltip if the column contents exceeds the length limit.
                        return $state;
                    }),
                TextColumn::make('cost'),
                IconColumn::make('featured')
                    ->boolean(),
                IconColumn::make('status')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
