<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aerial_network extends Model
{
    protected $fillable = [
        'aerial_id', 'funct', 'location', 'lat', 'long', 'digi_id'
    ];
}
