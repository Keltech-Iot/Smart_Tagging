<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manhole extends Model
{
    protected $fillable = [
        'manhole_id', 'funct', 'location', 'lat', 'long', 'type', 'digi_id'
    ];
}
