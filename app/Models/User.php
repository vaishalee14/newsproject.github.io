<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string|null $username
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $photo
 * @property string|null $phone
 * @property string $role
 * @property string $status
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'name',
        'username',
        'email',
        'email_verified_at',
        'password',
        'photo',
        'phone',
        'role',
        'status',
        'remember_token',
    ];

    /**
     * Get all permission groups.
     */
    public static function getPermissionGroups()
    {
        return DB::table('permissions')
            ->select('group_name')
            ->groupBy('group_name')
            ->get();
    }

    /**
     * Get permissions by group name.
     *
     * @param string $group_name
     */
    public static function getPermissionByGroupName($group_name)
    {
        return DB::table('permissions')
            ->select('name', 'id')
            ->where('group_name', $group_name)
            ->get();
    }

    /**
     * Check if a role has specific permissions.
     *
     * @param \Spatie\Permission\Models\Role $role
     * @param \Illuminate\Support\Collection $permissions
     * @return bool
     */
    public static function roleHasPermissions($role, $permissions)
    {
        return($permissions);
        foreach ($permissions as $permission) {
            if (!$role->hasPermissionTo($permission->name)) {
                return false;
            }
        }
        return true;
    }

    /**
     * Get unread notifications.
     */
    public function unreadNotifications()
    {
        return $this->morphMany('Illuminate\Notifications\DatabaseNotification', 'notifiable')
            ->whereNull('read_at');
    }
}
