<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AchievementResource\Pages;
use App\Models\Achievement;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AchievementResource extends Resource
{
    protected static ?string $model = Achievement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(191),
                Forms\Components\Select::make('service_id')
                    ->relationship('services', 'title')
                    ->searchable()
                    ->multiple(),
                Forms\Components\Section::make('Images')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('media')
                            ->collection('achievements-images')
                            ->multiple()
                            ->maxFiles(5)
                            ->disableLabel(),
                    ])
                    ->collapsible(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('media')
                    ->label('Images')
                    ->collection('achievements-images'),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ])->reorderable('sort')
            ->defaultSort('sort', 'asc');
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
            'index' => Pages\ListAchievements::route('/'),
            'create' => Pages\CreateAchievement::route('/create'),
            'edit' => Pages\EditAchievement::route('/{record}/edit'),
        ];
    }
}
