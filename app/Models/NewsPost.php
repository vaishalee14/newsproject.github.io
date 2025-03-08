<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsPost
 *
 * @property int $id
 * @property int $category_id
 * @property int|null $subcategory_id
 * @property int $user_id
 * @property string $news_title
 * @property string $news_title_slug
 * @property string $image
 * @property string $news_details
 * @property string $tags
 * @property int $view_count
 * @property int|null $breaking_news
 * @property int|null $top_slider
 * @property int|null $first_section_three
 * @property int|null $first_section_nine
 * @property string|null $post_date
 * @property string|null $post_month
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class NewsPost extends Model
{
	protected $table = 'news_posts';

	protected $casts = [
		'category_id' => 'int',
		'subcategory_id' => 'int',
		'user_id' => 'int',
		'view_count' => 'int',
		'breaking_news' => 'int',
		'top_slider' => 'int',
		'first_section_three' => 'int',
		'first_section_nine' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'category_id',
		'subcategory_id',
		'user_id',
		'news_title',
		'news_title_slug',
		'image',
		'news_details',
		'tags',
		'view_count',
		'breaking_news',
		'top_slider',
		'first_section_three',
		'first_section_nine',
		'post_date',
		'post_month',
		'status'
	];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

     public function subcategory(){
        return $this->belongsTo(Subcategory::class,'subcategory_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
