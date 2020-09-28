<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'proj_id', 'proj_des', 'location','area'
    ];
}
