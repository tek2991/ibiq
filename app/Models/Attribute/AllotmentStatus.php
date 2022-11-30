<?php

namespace App\Models\Attribute;

use Illuminate\Database\Eloquent\Model;

class AllotmentStatus extends Model
{
    public static function defaultAllotmentStatuses()
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

    public function allotments()
    {
        return $this->hasMany(Allotment::class);
    }
}
