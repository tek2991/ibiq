<?php

namespace App\Models\Permission;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public static function defaultRoles()
    {
        return [
            'admin',
            'manager',
            'user',
        ];
    }
}
