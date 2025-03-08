<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LiveTv
 * 
 * @property int $id
 * @property string|null $live_image
 * @property string|null $live_url
 * @property string|null $post_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class LiveTv extends Model
{
	protected $table = 'live_tvs';

	protected $fillable = [
		'live_image',
		'live_url',
		'post_date'
	];
}
