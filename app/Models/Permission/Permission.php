<?php

namespace App\Models\Permission;

class Permission extends \Spatie\Permission\Models\Permission
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

            'view_rooms',
            'add_rooms',
            'edit_rooms',
            'delete_rooms',

            'view_bookings',
            'add_bookings',
            'edit_bookings',
            'delete_bookings',

            'view_allotments',
            'add_allotments',
            'edit_allotments',
            'delete_allotments',

            'view_divisions',
            'add_divisions',
            'edit_divisions',
            'delete_divisions',

            'view_establishment_types',
            'view_room_types',
            'view_booking_statuses',
            'view_allotment_statuses',
        ];
    }
}
