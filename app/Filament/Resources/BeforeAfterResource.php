<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeforeAfterResource\Pages;
use App\Filament\Resources\BeforeAfterResource\RelationManagers;
use App\Models\BeforeAfter;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeforeAfterResource extends Resource
{
    protected static ?string $model = BeforeAfter::class;

    protected static ?string $label = 'Avant / après';

    protected static ?string $pluralLabel = 'Avant / après';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Image avant / après')
                    ->schema([
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('before_image')
                    ->label('Image avant')
                    ->collection('achievements-featured-images-before'),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('after_image')
                    ->label('Image après')
                    ->collection('achievements-featured-images-after'),
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
            'index' => Pages\ListBeforeAfters::route('/'),
            'create' => Pages\CreateBeforeAfter::route('/create'),
            'edit' => Pages\EditBeforeAfter::route('/{record}/edit'),
        ];
    }
}
