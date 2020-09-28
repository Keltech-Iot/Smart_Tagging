<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class work_order extends Model
{
    protected $fillable = [
        'job_id', 'jobDes', 'proj_id', 'location', 'component_type', 'planner', 'tech', 'customer', 'product_type', 'product_id', 'cert', 'custNotes', 'status'
    ];
}
