<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Splitter extends Model
{
    protected $fillable = ['splitter_name', 'main_exchange', 'type', 'wp_name', 'fixation_point'];
}
