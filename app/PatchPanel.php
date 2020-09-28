<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patchpanel extends Model
{
    protected $fillable = [
        'panel_name', 'status', 'Screen_disp', 'location', 'port_type', 'nfc'
    ];


}
