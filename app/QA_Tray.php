<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qa_tray extends Model
{
   protected $fillable = [
       'QA_id', 'job_id', 'manhole_id', 'closure_id', 'tray_number', 'tray_pic_loc', 'com_pic_loc', 'AdInfo', 'digital_sign'

   ];
   
}


