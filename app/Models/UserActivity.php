<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserActivity
 * 
 * @property int $id
 * @property int $user_id
 * @property string $action
 * @property Carbon $timestamp
 * 
 * @property User $user
 *
 * @package App\Models
 */
class UserActivity extends Model
{
	protected $table = 'user_activities';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'timestamp' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'action',
		'timestamp'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
