<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subcategory
 *
 * @property int $id
 * @property int $category_id
 * @property string $subcategory_name
 * @property string $subcategory_slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Subcategory extends Model
{
	protected $table = 'subcategories';

	protected $casts = [
		'category_id' => 'int'
	];

	protected $fillable = [
		'category_id',
		'subcategory_name',
		'subcategory_slug'
	];
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
