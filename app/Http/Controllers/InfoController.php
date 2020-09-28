<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FibrePort;

class InfoController extends Controller
{
    public function index($id, $type){

        $disp = fibreport::where('panel_id', $id)->get();

        if($type == '96 Fibre'){
            return view ('info_desk.info_quad', ['disp'=>$disp], ['panel'=>$id], ['pt'=>$type]);
        }
        if($type == '48 Fibre'){
            return view ('info_desk.info_du', ['disp'=>$disp], ['panel'=>$id], ['pt'=>$type]);
        }
    }

    public function mobile($id, $type){

        $disp = fibreport::where('panel_id', $id)->get();

        if($type == 'Quad'){
            return view ('info_desk.mobile_quad', ['disp'=>$disp, 'panel'=>$id, 'pt'=>$type]);
        }
        if($type == 'Duplex'){
            return view ('info_desk.mobile_du', ['disp'=>$disp, 'panel'=>$id, 'pt'=>$type]);
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    
}
