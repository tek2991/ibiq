<?php

namespace App\Models\Permission;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',

            'view_establishments',
            'add_establishments',
            'edit_establishments',
            'delete_establishments',
        ];
    }
}
