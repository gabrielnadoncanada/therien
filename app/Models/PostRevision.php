<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PostRevision
 * 
 * @property int $id
 * @property int $post_metadata_id
 * @property array $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property PostMetadata $post_metadatum
 *
 * @package App\Models
 */
class PostRevision extends Model
{
	protected $table = 'post_revisions';

	protected $casts = [
		'post_metadata_id' => 'int',
		'content' => 'json'
	];

	protected $fillable = [
		'post_metadata_id',
		'content'
	];

	public function post_metadata()
	{
		return $this->belongsTo(PostMetadata::class, 'post_metadata_id');
	}
}
