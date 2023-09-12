<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Partner extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

	protected $fillable = [
		'title',
		'content',
		'slug',
        'sort'
	];

    use HasFactory;

	protected static function booted()
    {
        static::updated(function ($partner) {
            Cache::forget('frontpage_partners');
        });

        static::created(function ($partner) {
            Cache::forget('frontpage_partners');
        });

        static::deleted(function ($partner) {
            Cache::forget('frontpage_partners');
        });
    }
}
