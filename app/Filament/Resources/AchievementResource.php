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
    protected static ?string $label = 'réalisation';

    protected static ?string $pluralLabel = 'réalisations';

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
                Forms\Components\Section::make('Image avant / après')
                    ->schema([
                        Forms\Components\Toggle::make('is_featured')
                            ->label('Afficher sur la page d\'accueil'),
                        SpatieMediaLibraryFileUpload::make('before_image')
                            ->label('Image avant')
                            ->collection('achievements-featured-images-before')
                            ->maxFiles(1),
                        SpatieMediaLibraryFileUpload::make('after_image')
                            ->label('Image après')
                            ->collection('achievements-featured-images-after')
                            ->maxFiles(1)
                    ])
                    ->collapsible(),
                Forms\Components\Section::make('Gallerie d\'images')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('media')
                            ->collection('achievements-images')
                            ->multiple()
                            ->maxFiles(10)
                            ->disableLabel(),
                    ])
                    ->collapsible()


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')
                    ->label('Titre')
                    ->searchable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('media')
                    ->label('Gallerie d\'images')
                    ->collection('achievements-images'),

                Tables\Columns\SpatieMediaLibraryImageColumn::make('before_image')
                    ->label('Image avant')
                    ->collection('achievements-featured-images-before'),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('after_image')
                    ->label('Image après')
                    ->collection('achievements-featured-images-after'),
                Tables\Columns\ToggleColumn::make('is_featured')
                    ->label('Afficher sur la page d\'accueil')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
        ];
    }
}
