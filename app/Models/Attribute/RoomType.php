<?php

namespace App\Models\Attribute;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    public static function defaultRoomTypes()
    {
        return [
            'Single',
            'Double',
            'Triple',
            'Quad',
            'Queen',
            'King',
            'Twin',
            'Double Double',
            'Studio',
            'Suite',
            'Other',
        ];
    }

    protected $fillable = [
        'name',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
