<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 * @property int $guard_name
 * @property Carbon $created_at
 * @property int $updated_at
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';

	protected $casts = [
		'guard_name' => 'int'
	];

	protected $fillable = [
		'name',
		'guard_name'
	];
}
