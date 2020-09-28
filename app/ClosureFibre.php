<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class closurefibre extends Model
{
    protected $fillable = [
        'fibre_upstream', 'closure_id', 'tray_number', 'fibre_downstream', 'upstreamData', 'downstreamData', 'upstream_cable', 'downstream_cable'
    ];
}
