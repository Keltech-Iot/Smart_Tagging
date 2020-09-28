<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cable extends Model 
{
     protected $fillable = [
        'cable_id',  'nfc_id', 'status', 'function', 'junction_id', 'cable_type', 'fibre_type', 'upstream_info', 'downstream_info'
    ];

}
