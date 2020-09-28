<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fibreport extends Model
{
    protected $fillable = [
        'port_id', 'fibre_name', 'cable_id', 'panel_id', 'function', 'circuit_info', 'customer_ref', 'bandwidth'
    ];
}
