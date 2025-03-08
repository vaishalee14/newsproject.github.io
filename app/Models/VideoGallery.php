<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VideoGallery
 * 
 * @property int $id
 * @property string|null $video_image
 * @property string|null $video_title
 * @property string|null $video_url
 * @property string|null $post_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class VideoGallery extends Model
{
	protected $table = 'video_galleries';

	protected $fillable = [
		'video_image',
		'video_title',
		'video_url',
		'post_date'
	];
}
