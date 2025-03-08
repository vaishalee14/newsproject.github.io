<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SeoSetting
 *
 * @property int $id
 * @property string|null $meta_title
 * @property string|null $meta_author
 * @property string|null $meta_keyword
 * @property string|null $meta_description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class SeoSetting extends Model
{
	protected $table = 'seo_settings';

	protected $fillable = [
		'meta_title',
		'meta_author',
		'meta_keyword',
		'meta_description'
	];


}
