<?php

namespace App\Models\Attribute;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    public static function defaultDivisions()
    {
        return [
            'Assam' => [
                'Guwahati',
                'Dibrugarh',
                'Cachar',
                'Darrang',
                'Nalbari Barpeta',
                'Goalpara',
                'Sivasagar',
                'Tinsukia',
                'Nagaon',
                'RMS GH',
                'RMS S'
            ]
        ];
    }

    protected $fillable = [
        'name',
        'circle',
    ];

    public function establishments()
    {
        return $this->hasMany(Establishment::class);
    }
}
