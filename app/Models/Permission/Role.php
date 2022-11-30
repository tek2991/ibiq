<?php

namespace App\Models\Permission;

class Role extends \Spatie\Permission\Models\Role
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
