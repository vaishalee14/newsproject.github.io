<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Banner
 * 
 * @property int $id
 * @property string|null $home_one
 * @property string|null $home_two
 * @property string|null $home_three
 * @property string|null $home_four
 * @property string|null $news_category_one
 * @property string|null $news_details_one
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Banner extends Model
{
	protected $table = 'banners';

	protected $fillable = [
		'home_one',
		'home_two',
		'home_three',
		'home_four',
		'news_category_one',
		'news_details_one'
	];
}
