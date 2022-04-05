<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $fillable = [
        'zip_code',
        'locality',
        'federal_entity',
        'settlements',
        'municipality'
    ];

    protected $casts = [
        'federal_entity' => 'array',
        'settlements' => 'array',
        'municipality' => 'array'
    ];
}
