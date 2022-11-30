<?php

namespace App\Models\Attribute;

use Illuminate\Database\Eloquent\Model;

class BookingStatus extends Model
{
    public static function defaultBookingStatuses()
    {
        return [
            'pending',
            'confirmed',
            'cancelled',
        ];
    }

    protected $fillable = [
        'name',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
