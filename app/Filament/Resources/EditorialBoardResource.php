<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EditorialBoardResource\Pages;
use App\Filament\Resources\EditorialBoardResource\RelationManagers;
use App\Models\EditorialBoard;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EditorialBoardResource extends Resource
{
    protected static ?string $model = EditorialBoard::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([
                        Select::make('journal_id')
                            ->relationship('journal', 'title')
                            ->label('Select Journal')
                            ->required(),
                        TextInput::make('name')->required(),
                        TextInput::make('position'),
                        TextInput::make('school'),
                    ]),
                Grid::make(1)
                    ->schema([
                        TextInput::make('address'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('journal.title')
                    ->wrap(),
                TextColumn::make('name'),
                TextColumn::make('position'),
                TextColumn::make('school'),
                TextColumn::make('address'),
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
            'index' => Pages\ManageEditorialBoards::route('/'),
        ];
    }
}
