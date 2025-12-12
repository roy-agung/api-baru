<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eksplore extends Model
{
    protected $table = "eksplore";

    protected $fillable = [
        'nis',
        'nama',
        'rombel',
        'rayon'
    ];
}
