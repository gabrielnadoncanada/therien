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

    public function achievements() {
        return $this->belongsToMany(Achievement::class);
    }
}
