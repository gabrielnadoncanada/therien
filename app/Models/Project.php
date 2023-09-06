<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
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
