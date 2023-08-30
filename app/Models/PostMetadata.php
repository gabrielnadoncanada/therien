<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostMetadatum
 * 
 * @property int $id
 * @property int $post_id
 * @property int $language_id
 * @property Carbon|null $scheduled_date
 * @property string $slug
 * @property string $title
 * @property string $status
 * @property string|null $featured_image
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Language $language
 * @property Post $post
 * @property Collection|MediaMeta[] $media_meta
 * @property Collection|PostRevision[] $post_revisions
 *
 * @package App\Models
 */
class PostMetadata extends Model
{
	protected $table = 'post_metadata';

	protected $casts = [
		'post_id' => 'int',
		'language_id' => 'int',
		'scheduled_date' => 'datetime'
	];

	protected $fillable = [
		'post_id',
		'language_id',
		'scheduled_date',
		'slug',
		'title',
		'status',
		'featured_image'
	];

	public function language()
	{
		return $this->belongsTo(Language::class);
	}

	public function post()
	{
		return $this->belongsTo(Post::class);
	}

	public function media_meta()
	{
		return $this->hasMany(MediaMeta::class, 'meta_id');
	}

	public function post_revisions()
	{
		return $this->hasMany(PostRevision::class, 'post_metadata_id');
	}
}
