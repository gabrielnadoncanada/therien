<?php

namespace App\Filament\Resources\Blog\PostResource\Pages;

use App\Filament\Resources\Blog\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPost extends EditRecord
{

    protected static string $resource = PostResource::class;

	protected function getPreviewModalView(): ?string
	{
		return 'posts.preview';
	}


	protected function getActions(): array
    {
        return [
	        Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
