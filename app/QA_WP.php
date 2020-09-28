<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qa_wp extends Model
{
    protected $fillable = [
        'QA_id', 'job_id', 'WP_id', 'WP_type', 'com_pic_loc', 'digital_sign', 'AdInfo'
    ];
}
