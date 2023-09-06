<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
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
