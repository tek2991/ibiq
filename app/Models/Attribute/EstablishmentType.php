<?php

namespace App\Models\Attribute;

use Illuminate\Database\Eloquent\Model;

class EstablishmentType extends Model
{
    public static function defaultEstablishmentTypes()
    {
        return [
            'IB',
            'IQ',
        ];
    }

    protected $fillable = [
        'name',
    ];

    public function establishments()
    {
        return $this->hasMany(Establishment::class);
    }
}
