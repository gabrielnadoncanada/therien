<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Media
 * 
 * @property int $id
 * @property string $title
 * @property string $file_name
 * @property string|null $description
 * @property string $file_type
 * @property int $size
 * @property string $url
 * @property string $path
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|MediaMeta[] $media_meta
 *
 * @package App\Models
 */
class Media extends Model
{
	protected $table = 'medias';

	protected $casts = [
		'size' => 'int'
	];

	protected $fillable = [
		'title',
		'file_name',
		'description',
		'file_type',
		'size',
		'url',
		'path'
	];

	public function media_meta()
	{
		return $this->hasMany(MediaMeta::class);
	}
}
