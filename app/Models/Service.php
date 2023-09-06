<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $fillable = [
		'title',
		'content',
		'slug',
        'sort',
        'image',
	];

    use HasFactory;

	protected static function booted()
    {
        static::updated(function ($service) {
            Cache::forget('frontpage_services');
        });

        static::created(function ($service) {
            Cache::forget('frontpage_services');
        });

        static::deleted(function ($service) {
            Cache::forget('frontpage_services');
        });
    }
}
