<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserResource extends Resource
{
    protected static ?string $label = 'utilisateur';

    protected static ?string $pluralLabel = 'utilisateurs';

	protected static ?string $model = User::class;

	protected static ?string $navigationIcon = 'heroicon-o-users';

	protected static ?int $navigationSort = 1;

	public static function form(Form $form): Form
	{
		return $form
			->schema([
				Forms\Components\TextInput::make('name')
                    ->label('Nom')
                    ->columnSpanFull()
					->required()
					->maxLength(255),
				Forms\Components\TextInput::make('email')
                    ->label('Courriel')
					->email()
                    ->columnSpanFull()
					->required()
					->maxLength(255),
				Forms\Components\TextInput::make('password')
					->label(__('Mot de passe'))
                    ->columnSpanFull()
					->password()
					->rule(Password::default())
					->autocomplete('new-password')
					->dehydrated(fn($state): bool => filled($state))
					->dehydrateStateUsing(fn($state): string => Hash::make($state))
					->live(debounce: 500)
			]);
	}

	public static function table(Table $table): Table
	{

		return $table
			->columns([
				Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
					->searchable(),
				Tables\Columns\TextColumn::make('email')
                    ->label('Courriel')
					->searchable(),
			])
			->filters([
				//
			])
			->actions([
				Tables\Actions\EditAction::make(),
				Tables\Actions\DeleteAction::make()
					->visible(function ($record) {
						return Auth::user()->id !== $record->id;
					}),
			])
			->bulkActions([
				Tables\Actions\BulkActionGroup::make([
					Tables\Actions\DeleteBulkAction::make(),
				]),
			])
			->emptyStateActions([
				Tables\Actions\CreateAction::make(),
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
			'index' => Pages\ListUsers::route('/'),
		];
	}
}
