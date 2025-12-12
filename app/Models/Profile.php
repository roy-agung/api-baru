<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profile";

    protected $fillable = [
        'nama',
        'nis',
        'rombel',
        'rayon',
        'media_sosial'
    ];
}
