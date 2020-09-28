<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cable;
use App\Joint_Closure;
use App\PatchPanel;
use App\Manhole;
use App\Aerial_Network;

class IndexController extends Controller
{

    public function main(){

        $odf = patchpanel::all();
        $jc = joint_closure::all();
        $cable = cable::all();
        $manhole = manhole::all();
        $aerial = aerial_network::all();

        return view('index.table', ['odf'=>$odf, 'jc'=>$jc, 'cable'=>$cable, 'manhole'=>$manhole, 'aerial'=>$aerial]);

    }

}
