<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 *
 * @property int $id
 * @property int $news_id
 * @property int $user_id
 * @property string $comment
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Review extends Model
{
	protected $table = 'reviews';

	protected $casts = [
		'news_id' => 'int',
		'user_id' => 'int'
	];

	protected $fillable = [
		'news_id',
		'user_id',
		'comment',
		'status'
	];

    public function news(){
        return $this->belongsTo(NewsPost::class,'news_id','id');
    }


    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

}
