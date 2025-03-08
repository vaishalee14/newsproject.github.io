<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotoGallery
 * 
 * @property int $id
 * @property string|null $photo_gallery
 * @property Carbon|null $post_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PhotoGallery extends Model
{
	protected $table = 'photo_galleries';

	protected $casts = [
		'post_date' => 'datetime'
	];

	protected $fillable = [
		'photo_gallery',
		'post_date'
	];
}
