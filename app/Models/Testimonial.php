<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
	protected $fillable = [
		'title',
		'content',
		'rating',
        'sort'
	];

    use HasFactory;

	protected static function booted()
    {
        static::updated(function ($testimonial) {
            Cache::forget('frontpage_testimonials');
        });

        static::created(function ($testimonial) {
            Cache::forget('frontpage_testimonials');
        });

        static::deleted(function ($testimonial) {
            Cache::forget('frontpage_testimonials');
        });
    }
}
