<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubscriptionItem
 * 
 * @property int $id
 * @property int $subscription_id
 * @property string $stripe_id
 * @property string $stripe_product
 * @property string $stripe_price
 * @property int|null $quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class SubscriptionItem extends Model
{
	protected $table = 'subscription_items';

	protected $casts = [
		'subscription_id' => 'int',
		'quantity' => 'int'
	];

	protected $fillable = [
		'subscription_id',
		'stripe_id',
		'stripe_product',
		'stripe_price',
		'quantity'
	];
}
