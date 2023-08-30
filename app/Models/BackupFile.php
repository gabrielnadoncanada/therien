<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BackupFile
 * 
 * @property int $id
 * @property string $file_name
 * @property int $size
 * @property string $url
 * @property string $path
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class BackupFile extends Model
{
	protected $table = 'backup_files';

	protected $casts = [
		'size' => 'int'
	];

	protected $fillable = [
		'file_name',
		'size',
		'url',
		'path'
	];
}
