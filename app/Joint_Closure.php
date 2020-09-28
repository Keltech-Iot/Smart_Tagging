<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class joint_closure extends Model
{
    protected $fillable = [
        'nfc', 'closure_id', 'type', 'position_id', 'position', 'exchange'
    ];
}
