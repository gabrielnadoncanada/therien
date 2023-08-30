<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MediaMetum
 * 
 * @property int $media_id
 * @property int $meta_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Media $media
 * @property PostMetadata $post_metadatum
 *
 * @package App\Models
 */
class MediaMeta extends Model
{
	protected $table = 'media_meta';
	public $incrementing = false;

	protected $casts = [
		'media_id' => 'int',
		'meta_id' => 'int'
	];

	public function media()
	{
		return $this->belongsTo(Media::class);
	}

	public function post_metadatum()
	{
		return $this->belongsTo(PostMetadata::class, 'meta_id');
	}
}
