<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 * 
 * @property int $id
 * @property string $name
 * @property string $code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|PostMetadata[] $post_metadata
 *
 * @package App\Models
 */
class Language extends Model
{
	protected $table = 'languages';

	protected $fillable = [
		'name',
		'code'
	];

	public function post_metadata()
	{
		return $this->hasMany(PostMetadata::class);
	}
}
