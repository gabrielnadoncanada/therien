<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
	use HasFactory;

	/**
	 * @var string
	 */
	protected $table = 'blog_categories';

	protected $fillable = [
		'name',
		'slug',
		'parent_id',
		'is_visible',
	];

	/**
	 * @var array<string, string>
	 */
	protected $casts = [
		'is_visible' => 'boolean',
	];

	public function children(): HasMany
	{
		return $this->hasMany(Category::class, 'parent_id');
	}

	public function parent(): BelongsTo
	{
		return $this->belongsTo(Category::class, 'parent_id');
	}

	public function posts(): HasMany
	{
		return $this->hasMany(Post::class, 'blog_category_id');
	}
}
