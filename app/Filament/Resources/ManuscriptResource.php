<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManuscriptResource\Pages;
use App\Filament\Resources\ManuscriptResource\RelationManagers;
use App\Models\Manuscript;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ManuscriptResource extends Resource
{
    protected static ?string $model = Manuscript::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name'),
                TextColumn::make('surname'),
                TextColumn::make('email'),
                TextColumn::make('phone'),
                TextColumn::make('address_1'),
                TextColumn::make('city'),
                TextColumn::make('state'),
                TextColumn::make('country'),
                TextColumn::make('academic_degree'),
                TextColumn::make('file_name'),
                TextColumn::make('journal'),
                TextColumn::make('reference'),
                TextColumn::make('comment'),
                IconColumn::make('status')->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('Download')
                    ->url(fn (Manuscript $record): string => config('app.url').'/storage/'.$record->attachment)
                    ->openUrlInNewTab(),
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
            'index' => Pages\ManageManuscripts::route('/'),
        ];
    }
}
