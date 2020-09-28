<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qa_panel extends Model
{
     protected $fillable = [
       'QA_id', 'job_id', 'panel_id', 'port_number', 'terminal_pic_loc', 'com_pic_loc', 'AdInfo', 'digital_sign'

   ];
}
