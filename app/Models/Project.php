<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model  implements HasMedia
{
	protected $fillable = [
		'title',
		'content',
		'slug',
        'sort',
		'before_image',
		'after_image',
	];

    use HasFactory;
    use InteractsWithMedia;

	protected static function booted()
    {
        static::updated(function ($project) {
            Cache::forget('frontpage_projects');
        });

        static::created(function ($project) {
            Cache::forget('frontpage_projects');
        });

        static::deleted(function ($project) {
            Cache::forget('frontpage_projects');
        });
    }
}
